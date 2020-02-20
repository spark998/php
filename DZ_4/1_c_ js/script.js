window.addEventListener('DOMContentLoaded', function () {
	'use strict';

	let imgLink = document.querySelectorAll('.img-link'),
		overlay = document.querySelector('.overlay'),
		close = document.querySelector('.popup-close');

	let arrBtn = [];
	imgLink.forEach(function (item) {
		arrBtn.push(item);
	});

	arrBtn.forEach(function (item) {
		item.addEventListener('click', function () {
			overlay.style.display = 'block';
			item.classList.add('more-splash');
			document.body.style.overflow = 'hidden';
		});
		close.addEventListener('click', function () {
			overlay.style.display = 'none';
			item.classList.remove('more-splash');
			document.body.style.overflow = '';
		});
	});
});
