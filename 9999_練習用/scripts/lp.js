const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0
};

const imgs = document.querySelectorAll('.image');
const observer = new IntersectionObserver(callback, options);

imgs.forEach(function(img) {
    observer.observe(img);
});

function callback(entries, object) {
    entries.forEach(function(entry, i) {
        if (!entry.isIntersecting) return;

        const img = entry.target;
        const imgItem = img.querySelector("img");
        const text1 = img.querySelector(".image__text-1");
        const text2 = img.querySelector(".image__text-2");
        const button = img.querySelector("button");
        imgItem.classList.add('image-animation');
        text1.classList.add('text-animation-1');
        if (text2 != null) text2.classList.add('text-animation-2');
        if (button != null) button.classList.add('button-animation');
        object.unobserve(img);
    });
};
