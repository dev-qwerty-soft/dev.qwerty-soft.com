document.addEventListener("DOMContentLoaded",function(){input1=document.getElementById('cf_1')
input2=document.getElementById('cf_2')
input3=document.getElementById('cf_3')
input4=document.getElementById('cf_4')
if(input1){input1.addEventListener('input',()=>{input1.classList.add('white_bg')})}
if(input2){input2.addEventListener('input',()=>{input2.classList.add('white_bg')})}
if(input3){input3.addEventListener('input',()=>{input3.classList.add('white_bg')})}
if(input4){input4.addEventListener('input',()=>{input4.classList.add('white_bg')})}
const sb_buttons=[document.getElementById('sb_header'),document.getElementById('sb_header_sticky'),document.getElementById('sb_content_d'),document.getElementById('sb_content_t')];const modalMask=document.getElementById('modal_mask')
const modalWrapper=document.getElementById('modal_wrapper')
function sbHandleClick(event){modalMask.classList.add('modal_mask_show')
modalWrapper.classList.add('modal_wrapper_show')
document.body.classList.add('no-scroll');formBox.classList.remove('formbox_hide')
formMessage.classList.remove('form_message_show')}
sb_buttons.forEach(function(element){if(element){element.addEventListener('click',sbHandleClick)}});document.addEventListener('click',handleClickOutside);function handleClickOutside(event){if(event.target!==modalWrapper&&modalMask.classList.contains('modal_mask_show')&&!sb_buttons.includes(event.target)&&!modalWrapper.contains(event.target)&&!sb_buttons.some(button=>button.contains(event.target))){modalMask.classList.remove('modal_mask_show')
modalWrapper.classList.remove('modal_wrapper_show')
document.body.classList.remove('no-scroll')}}
const closeArrow=document.getElementById('modal_wrapper_closer')
if(closeArrow){closeArrow.addEventListener('click',()=>{modalMask.classList.remove('modal_mask_show')
modalWrapper.classList.remove('modal_wrapper_show')
document.body.classList.remove('no-scroll');const fileInput=document.getElementById('qwerty_file')
const fileInput2=document.getElementById('qwerty_file2')
const fileInput3=document.getElementById('qwerty_file3')
const file_set1=document.getElementById('file_set');const file_set2=document.getElementById('file_set2');const file_set3=document.getElementById('file_set3');fileInput.value=""
fileInput2.value=""
fileInput3.value=""
if(file_set1){file_set1.innerHTML=""}
if(file_set2){file_set2.innerHTML=""}
if(file_set3){file_set3.innerHTML=""}
input1.value="";input2.value="";input3.value="";input4.value="";const cfCheckbox=document.getElementById('cf_checkbox');const checkboxes2=cfCheckbox.querySelectorAll('input[type="checkbox"]');const checkboxes3=cfCheckbox.querySelectorAll('label');checkboxes2.forEach(checkbox=>{checkbox.checked=!1});checkboxes3.forEach(checkbox3=>{checkbox3.classList.remove('chacked_block')})})}
const fileInput=document.getElementById('qwerty_file')
const fileInput2=document.getElementById('qwerty_file2')
const fileInput3=document.getElementById('qwerty_file3')
const fileNameDisplay=document.getElementById('fileName');const file_inputs_11af2fc=document.querySelector('.file_inputs_11af2fc')
const file_max_text=document.getElementById('file_max_text')
function closer1(){const file_close1=document.getElementById('file_close1')
const file_set=document.getElementById('file_set');if(file_close1){file_close1.addEventListener('click',(event)=>{console.log('Click')
const file_close2=document.getElementById('file_close2')
const file_close3=document.getElementById('file_close3')
if(!file_close2&&!file_close3){file_inputs_11af2fc.style.height="37px"}
fileInput.value=""
file_set.parentNode.removeChild(file_set);event.preventDefault();event.stopPropagation();fileInput2.style.display="none"
fileInput2.style.zIndex="1"
fileInput3.style.display="none"
fileInput3.style.zIndex="1"
fileInput.style.display="block"
fileInput.style.zIndex="9999"})}}
function closer2(){const file_close2=document.getElementById('file_close2')
const file_set2=document.getElementById('file_set2');if(file_close2){file_close2.addEventListener('click',(event)=>{console.log('Click2')
file_set2.innerHTML=""
file_set2.parentNode.removeChild(file_set2);fileInput2.value=""
const file_close1=document.getElementById('file_close1')
const file_close3=document.getElementById('file_close3')
if(!file_close1&&!file_close3){file_inputs_11af2fc.style.height="37px"}
fileInput.style.display="none"
fileInput.style.zIndex="1"
fileInput3.style.display="none"
fileInput3.style.zIndex="1"
fileInput2.style.display="block"
fileInput2.style.zIndex="9999"
event.preventDefault();event.stopPropagation()})}}
function closer3(){const file_close3=document.getElementById('file_close3')
const file_set3=document.getElementById('file_set3');if(file_set3){file_close3.addEventListener('click',(event)=>{console.log('Click3')
file_max_text.style.display="none"
file_set3.innerHTML=""
file_set3.parentNode.removeChild(file_set3);fileInput3.value=""
const file_close1=document.getElementById('file_close1')
const file_close2=document.getElementById('file_close2')
if(!file_close1&&!file_close2){file_inputs_11af2fc.style.height="37px"}
event.preventDefault();event.stopPropagation();fileInput2.style.display="none"
fileInput2.style.zIndex="1"
fileInput.style.display="none"
fileInput.style.zIndex="1"
fileInput3.style.display="block"
fileInput3.style.zIndex="9999"})}}
if(fileInput){fileInput.addEventListener('change',()=>{if(fileInput.files.length>0){console.log('Yes')
file_inputs_11af2fc.style.height="55px"
const fileName=fileInput.files[0].name;let old=fileNameDisplay.innerHTML
fileNameDisplay.innerHTML=old+"<div id='file_set' class='file_set'><span>"+fileName+"</span><img id='file_close1' src='https://dev.qwerty-soft.com/wp-content/themes/qwerty-soft/assets/dist/images/close.svg'></div>";fileInput.style.display="none"
fileInput.style.zIndex="1"
fileInput2.style.display="block"
fileInput2.style.zIndex="9999"
setTimeout(closer1,100)
setTimeout(closer2,100)
setTimeout(closer3,100)}})}
if(fileInput2){fileInput2.addEventListener('change',()=>{if(fileInput2.files.length>0){console.log('Yes2')
const fileName2=fileInput2.files[0].name;let old=fileNameDisplay.innerHTML
fileNameDisplay.innerHTML=old+"<div id='file_set2' class='file_set'><span>"+fileName2+"</span><img id='file_close2' src='https://dev.qwerty-soft.com/wp-content/themes/qwerty-soft/assets/dist/images/close.svg'></div>"
fileInput2.style.display="none"
fileInput2.style.zIndex="1"
fileInput.style.display="none"
fileInput.style.zIndex="1"
fileInput3.style.display="block"
fileInput3.style.zIndex="9999"
setTimeout(closer2,100)
setTimeout(closer1,100)}})}
if(fileInput3){fileInput3.addEventListener('change',()=>{if(fileInput3.files.length>0){console.log('Yes3')
const fileName3=fileInput3.files[0].name;file_inputs_11af2fc.style.height="55px"
file_max_text.style.display="block"
let old=fileNameDisplay.innerHTML
fileNameDisplay.innerHTML=old+"<div id='file_set3' class='file_set'><span>"+fileName3+"</span><img id='file_close3' src='https://dev.qwerty-soft.com/wp-content/themes/qwerty-soft/assets/dist/images/close.svg'></div>"
fileInput2.style.display="none"
fileInput2.style.zIndex="1"
fileInput.style.display="none"
fileInput.style.zIndex="1"
fileInput3.style.display="block"
fileInput3.style.zIndex="9999"
setTimeout(closer3,100)
setTimeout(closer2,100)
setTimeout(closer1,100)}})}
const checkboxes=document.querySelectorAll('.checkboxes_11af2fc input[type="checkbox"]');if(checkboxes){checkboxes.forEach(function(element){element.addEventListener('change',checkboxesClick)})}
function checkboxesClick(){const parentElement=this.parentNode;parentElement.classList.toggle('chacked_block')}
const formBox=document.getElementById('wpcf7-f330-o1')
const formMessage=document.getElementById('formMessage')
document.addEventListener('wpcf7mailsent',function(event){const formId=event.detail.contactFormId;if(formId===330){formBox.classList.add('formbox_hide')
formMessage.classList.add('form_message_show')}},!1);var inputField1=document.getElementById('cf_1');var inputField2=document.getElementById('cf_2');var inputField3=document.getElementById('cf_3');var inputField4=document.getElementById('cf_4');if(inputField1){inputField1.addEventListener('input',function(){if(inputField1.value.trim()!==''){inputField1.style.backgroundColor='#e8f0fe'}else{inputField1.style.backgroundColor='#fff'}})}
if(inputField2){inputField2.addEventListener('input',function(){if(inputField2.value.trim()!==''){inputField2.style.backgroundColor='#e8f0fe'}else{inputField2.style.backgroundColor='#fff'}})}
if(inputField3){inputField3.addEventListener('input',function(){if(inputField3.value.trim()!==''){inputField3.style.backgroundColor='#e8f0fe'}else{inputField3.style.backgroundColor='#fff'}})}
if(inputField4){inputField4.addEventListener('input',function(){if(inputField4.value.trim()!==''){inputField4.style.backgroundColor='#e8f0fe'}else{inputField4.style.backgroundColor='#fff'}})}
const card_0=document.querySelector('.cards__twin_0')
const cards__card_0=document.querySelector('.cards__card_0')
const cards__card_back_0=document.querySelector('.cards__card-back_0')
const card_1=document.querySelector('.cards__twin_1')
const cards__card_1=document.querySelector('.cards__card_1')
const cards__card_back_1=document.querySelector('.cards__card-back_1')
if(card_0){card_0.addEventListener('click',()=>{cards__card_0.classList.toggle('card_show')
cards__card_back_0.classList.toggle('card_hide')})
if(card_1){}
card_1.addEventListener('click',()=>{cards__card_1.classList.toggle('card_show')
cards__card_back_1.classList.toggle('card_hide')})}})
document.addEventListener("DOMContentLoaded",function(){const logo_link=document.querySelector('.header-logo-link')
if(logo_link){logo_link.addEventListener('click',()=>{window.scrollTo({top:0,behavior:'smooth'})})}})
;