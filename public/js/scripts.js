// window.addEventListener('scroll', function() {
//     const circles = document.querySelectorAll('.circle-fill');
//     const screenHeight = window.innerHeight; // Высота видимой части экрана
//     const screenCenter = screenHeight / 2; // Центр экрана

//     circles.forEach(circle => {
//         const rect = circle.getBoundingClientRect(); // Позиция элемента относительно видимой области
//         const distanceFromCenter = Math.abs((rect.top + rect.bottom) / 2 - screenCenter); // Расстояние от центра круга до центра экрана
//         const maxRadius = parseInt(circle.getAttribute('r')); // Исходный радиус

//         // Нормализуем расстояние от 0 до 1, где 0 - это центр экрана, а 1 - край
//         const distanceRatio = Math.min(distanceFromCenter / screenHeight, 1);

//         // Изменяем радиус в зависимости от расстояния: чем ближе к центру, тем больше радиус
//         const newRadius = maxRadius * (1 - Math.abs(0.5 - distanceRatio) * 2);

//         // Устанавливаем новый радиус
//         circle.setAttribute('r', newRadius);
//     });
// });


// document.addEventListener('scroll', () => {
//     // Получаем центр экрана по вертикали
//     const screenCenterY = window.scrollY + window.innerHeight / 2;

//     // Находим все элементы <circle> с классом 'circle-fill'
//     const circles = document.querySelectorAll('circle.circle-fill');

//     circles.forEach(circle => {
//         // Получаем координаты центра элемента
//         const svg = circle.ownerSVGElement;
//         const svgRect = svg.getBoundingClientRect();
//         const cy = parseFloat(circle.getAttribute('cy')) / 100 * svgRect.height;

//         const elementCenterY = svgRect.top + cy;

//         // Рассчитываем расстояние от центра экрана до центра элемента
//         const distanceFromCenter = Math.abs(screenCenterY - elementCenterY);

//         // Получаем изначальный радиус элемента
//         const initialRadius = parseFloat(circle.dataset.initialRadius) || parseFloat(circle.getAttribute('r'));

//         // Рассчитываем новый радиус
//         const newRadius = Math.max(0, initialRadius - distanceFromCenter / 100); // делим на 10 для сглаживания изменения

//         // Применяем новый радиус
//         circle.setAttribute('r', newRadius);
//     });
// });
