const icon_bar = document.querySelector('.icon_bar')
const menu_mb = document.querySelector('.menu_mb')
const overlay_mb = document.querySelector('.overlay_mb')
icon_bar.onclick = function () {
   menu_mb.style.transform = "translateX(0%)";
   menu_mb.style.transition = "ease .4s";
   overlay_mb.classList.toggle('none')
   overlay_mb.style.animation = "overlay ease .5s";
}
overlay_mb.onclick = function () {
   menu_mb.style.transform = "translateX(-100%)";
   overlay_mb.classList.toggle('none')
}
const $$ = document.querySelector.bind(document);
const $$$ = document.querySelectorAll.bind(document);
const tabs = $$$(".form_auth");
const panes = $$$(".form_list");
tabs.forEach((tab, index) => {
   const pane = panes[index];
   tab.onclick = function () {
      $$(".form_auth.active").classList.remove("active");
      $$(".form_list.active").classList.remove("active");
      this.classList.add("active");
      pane.classList.add("active");
   };
});
const file_input=document.querySelector('#file_input')
const file_name=document.querySelector('#file_name')
file_input.onchange=function(e) {
   file_name.textContent=e.target.files[0].name;
}
const on_form=document.querySelector('.on_form')
const overlay_job=document.querySelector('.overlay_job')
const closeform=document.querySelector('.closeform')
on_form.onclick=function(){
   overlay_job.classList.toggle('none')
   overlay_job.style.animation = "overlay ease .5s";
}
closeform.onclick=function(){
   overlay_job.classList.toggle('none')
   overlay_job.style.animation = "overlay ease .5s";
}
