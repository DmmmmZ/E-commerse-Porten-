// dropdown-menu 
let intervalId;
document.querySelectorAll('.dropdown_toggle').forEach(e => {
	e.addEventListener('click', e => {
		const menu = e.currentTarget.dataset.path;
		document.querySelectorAll('.dropdown_menu').forEach(e => {
			if (!document.querySelector(`[data-target=${menu}]`).classList.contains('open')){
				e.classList.remove('menu-active');
				e.classList.remove('open');
				document.querySelector(`[data-target=${menu}]`).classList.add('menu-active');
				intervalId = setTimeout(() => {
					document.querySelector(`[data-target=${menu}]`).classList.add('open');
				}, 0);
			}

			if (document.querySelector(`[data-target=${menu}]`).classList.contains('open')) {
				clearTimeout(intervalId);
				document.querySelector(`[data-target=${menu}]`).classList.remove('menu-active');
				intervalId = setTimeout(() => {
					document.querySelector(`[data-target=${menu}]`).classList.remove('open');
				}, 0);
			}
		});
	});
});


// counter
const counters = document.querySelectorAll('[data-counter]');
if (counters){
    counters.forEach(counter => {
        counter.addEventListener('click', e => {
            const targets = e.target;
            if(targets.closest('.counter__button')) {
                if (targets.closest('.counter').querySelector('input').value == '' && (targets.classList.contains('counter__button_minus') || targets.classList.contains('counter__button_plus') )){
                    targets.closest('.counter').querySelector('input').value = 0;
                }


                let value = parseInt(targets.closest('.counter').querySelector('input').value);  
                
                if(targets.classList.contains('counter__button_plus')) {
                    value++;
                } 
                else {
                    value--;
                }
                if(value <= 0) {
                    value = 0;
                    targets.closest('.counter').querySelector('.counter__button_minus').classList.add('disabled');
                } else {
                    targets.closest('.counter').querySelector('.counter__button_minus').classList.remove('disabled');
                }
                targets.closest('.counter').querySelector('input').value = value;
            }
        });
    });
};

// zoom-image
let magnifying_area = document.getElementById("magnifying_area");
let magnifying_img = document.getElementById("magnifying_img");

magnifying_area.addEventListener("mousemove", function(e) {
    clientX = e.clientX - magnifying_area.offsetLeft;
    clientY = e.clientY - magnifying_area.offsetTop;

    mWidth = magnifying_area.offsetWidth;
    mHeight = magnifying_area.offsetHeight;

    clientX = clientX / mWidth * 100;
    clientY = clientY / mHeight * 100;

    magnifying_img.style.transform = 'translate(-'+clientX+'%,-'+clientY+'%) scale(2)';
    // magnifying_img.style.transform = 'translate(-50%,-50%) scale(2)';

});

magnifying_area.addEventListener("mouseleave", function() {
    magnifying_img.style.transform = 'translate(-50%,-50%) scale(1)';

});