let position1 = 0;
const slidsToShow1 = 4;
const slidsToScroll1 = 1;

const container1 = document.querySelector('.stocks__content-slider');
const track1 = document.querySelector('.stocks__content-slider-track');
const btnPrev1 = document.querySelector('.stocks__content-slider-buttons-prev');
const btnNext1 = document.querySelector('.stocks__content-slider-buttons-next');
const items1 = document.querySelectorAll('.stocks__content-slider-track-item');
const itemsCount1 = items1.length;
const itemWidth1 = container1.clientWidth / slidsToShow1;
const movePosition1 = slidsToScroll1 * itemWidth1;

items1.forEach((item1) => {
	item1.style.minWidth = `${itemWidth1}px`;
});

btnNext1.addEventListener('click', () => {
	const itemsLeft1 = itemsCount1 - (Math.abs(position1) + slidsToShow1 * itemWidth1) / itemWidth1;

	position1 -= itemsLeft1 >= slidsToScroll1 ? movePosition1 : itemsLeft1 * itemWidth1;

	setPositon1();
	ckeckBtns1();
});

btnPrev1.addEventListener('click', () => {
	const itemsLeft2 = Math.abs(position1) / itemWidth1;

	position1 += itemsLeft2 >= slidsToScroll1 ? movePosition1 : itemsLeft1 * itemWidth1;

	setPositon1();
	ckeckBtns1();
});

const setPositon1 = () => {
	track1.style.transform = `translateX(${position1}px)`;
};

const ckeckBtns1 = () => {
	btnPrev1.disabled = position1 === 0;
	btnNext1.disabled = position1 <= -(itemsCount1 - slidsToShow1) * itemWidth1;
};

ckeckBtns1();
