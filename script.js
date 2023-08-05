//スクロールによるfade-inの関数

const target = document.querySelectorAll(".fade-in");
window.addEventListener("scroll", () => {
    for(let i = 0; i < target.length; i++){
        const distance = target[i].getBoundingClientRect().top; //現在の画面左上から要素までの距離
        const scroll = document.documentElement.scrollTop; //スクロール位置の取得
        const sum = distance + scroll;
        const windowHeight = window.innerHeight;
        if(scroll > sum - windowHeight + 100){
            target[i].classList.add("fade-in-active");
        }
    }
});