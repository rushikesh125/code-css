const AsideEl = document.querySelectorAll('.documentation-aside-container');
const DocContainerEl = document.querySelectorAll('.Doc-Container');
var widthofAsideEl = AsideEl[0].clientWidth+"px";
DocContainerEl[0].style.marginLeft=AsideEl[0].clientWidth+"px";
window.addEventListener('resize',()=>{
    DocContainerEl[0].style.marginLeft=AsideEl[0].clientWidth+"px";
})