//sidebar
const menuItems = document.querySelectorAll('.menu-item');

//messages
const messageNotifications = document.querySelector('#messages-notifications');
const messages = document.querySelector('.messages');
const message = messages.querySelectorAll('.message');
const messageSearch = document.querySelector('#message-search');

//theme
const themer = document.querySelector('#theme');
const themeModal = document.querySelector('.customize-theme');
const fontSizes = document.querySelectorAll('.choose-size span');
var root = document.querySelector(':root');
const colorPalette = document.querySelectorAll('.choose-color span');
const Bg1 = document.querySelector('.bg-1');
const Bg2 = document.querySelector('.bg-2');
const Bg3 = document.querySelector('.bg-3');

//unoperational
const unoperational2 = document.querySelector('#unoperational2');
const unoperationalModal2 = document.querySelector('.customize-unoperational');

const unoperational = document.querySelector('#unoperational');
const unoperationalModal = document.querySelector('.customize-unoperational');

const unoperational3 = document.querySelector('#unoperational3');
const unoperationalModal3 = document.querySelector('.customize-unoperational');

const unoperational4 = document.querySelector('#unoperational4');
const unoperationalModal4 = document.querySelector('.customize-unoperational');

const unoperational5 = document.querySelector('#unoperational5');
const unoperationalModal5 = document.querySelector('.customize-unoperational');
//hide
const log = document.querySelector('.login');
const site = document.querySelector('.site');


//sidebar

const changeActiveItem = () => {
	menuItems.forEach(item => {
		item.classList.remove('active');
	})
}

menuItems.forEach(item => {
	item.addEventListener('click', () => {
		changeActiveItem();
		item.classList.add('active');
		if (item.id != 'Notifications'){
			document.querySelector('.Notifications-popup').style.display = 'none';
		} else{
			document.querySelector('.Notifications-popup').style.display = 'block';
			document.querySelector('#Notifications .notification-count').style.display = 'none';
		}
	})
})

//messages
//searhes chat

const searchMessage = () => {
	const val = messageSearch.value.toLowerCase();
	message.forEach(user => {
		let name = user.querySelectorAll('h5').textContent.toLowerCase();
		if (name.indexOf(val) != -1) {
			user.style.display = 'flex';
		} else{
			user.style.display = 'none';
		}
		console.log(val);
	})
	}


//search chat 
messageSearch.addEventListener('keyup', searchMessage)

//highlight message card
messageNotifications.addEventListener('click', () => {
	messages.style.boxShadow = '0 0 1rem var(--color-primary)';
	messageNotifications.querySelector('.notification-count').style.display ='none';
	setTimeout(() => {
		messages.style.boxShadow = 'none';
	}, 2000);
})

//theme
//open
const openThemeModal = () => {
	themeModal.style.display = 'grid';
}

//close
const closeThemeModal = (e) => {
	if (e.target.classList.contains('customize-theme')){
		themeModal.style.display = 'none';
	}
}

themeModal.addEventListener('click', closeThemeModal);

themer.addEventListener('click', openThemeModal);


//fonts

//remove active class from font size
const removeSizeSelector = () => {
	fontSizes.forEach(size => {
		size.classList.remove('active');
	})
}

fontSizes.forEach(size => {
	size.addEventListener('click', () => {
	 removeSizeSelector();
	 let fontSize;
	 size.classList.toggle('active');
	
		if (size.classList.contains('font-size-1')){
		fontSize = '10px';
		root.style.setProperty('--sticky-top-left', '5.4rem');
		root.style.setProperty('--sticky-top-right', '5.4rem');
	} else if(size.classList.contains('font-size-2')){
		fontSize = '13px';
		root.style.setProperty('--sticky-top-left', '5.4rem');
		root.style.setProperty('--sticky-top-right', '-7rem');
	} else if(size.classList.contains('font-size-3')){
		fontSize = '16px';
		root.style.setProperty('--sticky-top-left', '-2rem');
		root.style.setProperty('--sticky-top-right', '-17rem');
	} else if(size.classList.contains('font-size-4')){
		fontSize = '19px';
		root.style.setProperty('--sticky-top-left', '-5rem');
		root.style.setProperty('--sticky-top-right', '-25rem');
	} else if(size.classList.contains('font-size-5')){
		fontSize = '22px';
		root.style.setProperty('--sticky-top-left', '-12rem');
		root.style.setProperty('--sticky-top-right', '-35rem');
	}

	// change font size of the root
	document.querySelector('html').style.fontSize = fontSize;
	})
	
})

//remove active class from color
const changeActiveColorClass = () => {
	colorPalette.forEach(colorPicker => {
		colorPicker.classList.remove('active');
	})
}

//change color
colorPalette.forEach(color => {
	color.addEventListener('click', () => {
		let primary;
		changeActiveColorClass();

		if (color.classList.contains('color-1')){
			primaryHue = 252;
		} else if(color.classList.contains('color-2')){
			primaryHue = 52;
		} else if(color.classList.contains('color-3')){
			primaryHue = 352;
		} else if(color.classList.contains('color-4')){
			primaryHue = 152;
		} else if(color.classList.contains('color-5')){
			primaryHue = 202;
		} 
		color.classList.add('active');

		root.style.setProperty('--primary-color-hue', primaryHue);
	})
})

//theme background
let lightColorLightness;
let whiteColorLightness;
let darkColorLightness;

//change bgc
const changeBG = () => {
	root.style.setProperty('--light-color-lightness', lightColorLightness);
	root.style.setProperty('--white-color-lightness', whiteColorLightness);
	root.style.setProperty('--dark-color-lightness', darkColorLightness);
}

Bg1.addEventListener('click', () => {
	//add active class
	Bg1.classList.add('active');
	//remove active class
	Bg2.classList.remove('active');
	Bg3.classList.remove('active');
	window.location.reload();
});

Bg2.addEventListener('click', () => {
	darkColorLightness = '95%';
	whiteColorLightness = '20%';
	lightColorLightness = '15%';

	//add active class
	Bg2.classList.add('active');
	//remove active class
	Bg1.classList.remove('active');
	Bg3.classList.remove('active');
	changeBG();
});

Bg3.addEventListener('click', () => {
	darkColorLightness = '95%';
	whiteColorLightness = '10%';
	lightColorLightness = '0%';

	//add active class
	Bg3.classList.add('active');
	//remove active class
	Bg1.classList.remove('active');
	Bg2.classList.remove('active');
	changeBG();
});

//unoperational customizations

const openUnoperationalModal = () => {
	unoperationalModal.style.display = 'grid';
}

const closeUnoperationalModal = (e) => {
	if (e.target.classList.contains('customize-unoperational')){
		unoperationalModal.style.display = 'none';
	}
}

unoperationalModal.addEventListener('click', closeUnoperationalModal);

unoperational.addEventListener('click', openUnoperationalModal);

//un2

const openUnoperationalModal2 = () => {
	unoperationalModal2.style.display = 'grid';
}

const closeUnoperationalModal2 = (e) => {
	if (e.target.classList.contains('customize-unoperational')){
		unoperationalModal.style.display = 'none';
	}
}

unoperationalModal2.addEventListener('click', closeUnoperationalModal2);

unoperational2.addEventListener('click', openUnoperationalModal2);

//un3

const openUnoperationalModal3 = () => {
	unoperationalModal3.style.display = 'grid';
}

const closeUnoperationalModal3 = (e) => {
	if (e.target.classList.contains('customize-unoperational')){
		unoperationalModal.style.display = 'none';
	}
}

unoperationalModal3.addEventListener('click', closeUnoperationalModal3);

unoperational3.addEventListener('click', openUnoperationalModal3);

//un4

const openUnoperationalModal4 = () => {
	unoperationalModal4.style.display = 'grid';
}

const closeUnoperationalModal4 = (e) => {
	if (e.target.classList.contains('customize-unoperational')){
		unoperationalModal.style.display = 'none';
	}
}

unoperationalModal4.addEventListener('click', closeUnoperationalModal4);

unoperational4.addEventListener('click', openUnoperationalModal4);

//un5

const openUnoperationalModal5 = () => {
	unoperationalModal2.style.display = 'grid';
}

const closeUnoperationalModal5 = (e) => {
	if (e.target.classList.contains('customize-unoperational')){
		unoperationalModal.style.display = 'none';
	}
}

unoperationalModal5.addEventListener('click', closeUnoperationalModal5);

unoperational5.addEventListener('click', openUnoperationalModal5);