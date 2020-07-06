let position = 0;

let slidsToShow;
if(matchMedia){
	let screen = window.matchMedia("(max-width:976px)");
	screen.addListener(changes);
	changes(screen)
} 

function changes(screen, screenM){
	if(screen.matches){
		slidsToShow = 3;
		console.log('976');
		
	} else {
		slidsToShow = 4;
		console.log('много');
	}
}

const slidsToScroll = 1;

const container = document.querySelector('.popularItem__content-slider');
const track = document.querySelector('.popularItem__content-slider-track');
const btnPrev = document.querySelector('.popularItem__content-slider-buttons-prev');
const btnNext = document.querySelector('.popularItem__content-slider-buttons-next');
const items = document.querySelectorAll('.popularItem__content-slider-track-item');
const itemsCount = items.length;
const itemWidth = container.clientWidth / slidsToShow;
const movePosition = slidsToScroll * itemWidth;

items.forEach((item) => {
	item.style.minWidth = `${itemWidth}px`;

});

btnNext.addEventListener('click', () => {
	const itemsLeft = itemsCount - (Math.abs(position) + slidsToShow * itemWidth) / itemWidth;

	position -= itemsLeft >= slidsToScroll ? movePosition : itemsLeft * itemWidth;

	setPositon();
	ckeckBtns();
});

btnPrev.addEventListener('click', () => {
	const itemsLeft = Math.abs(position) / itemWidth;

	position += itemsLeft >= slidsToScroll ? movePosition : itemsLeft * itemWidth;

	setPositon();
	ckeckBtns();
});

const setPositon = () => {
	track.style.transform = `translateX(${position}px)`;
};

const ckeckBtns = () => {
	btnPrev.disabled = position === 0;
	btnNext.disabled = position <= -(itemsCount - slidsToShow) * itemWidth;
};

ckeckBtns();
