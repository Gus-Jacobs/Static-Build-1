const messages = document.querySelector(".messages");
const message = messages.querySelectorAll(".message");
const messageSearch = document.querySelector("#message-search");

//searches chat

const searchMessage = () => {
	const val = messageSearch.value.toLoweCase();
	message.forEach(chat => {
		let name = chat.querySelectorAll(".h5").textContent.toLoweCase();
		if(name.indexOf(val) != -1){
			chat.style.display = 'flex';
		} else{
			chat.style.display = 'none';
		}
	})
}


//search

messageSearch.addEventListener("keyup", searchMessage);