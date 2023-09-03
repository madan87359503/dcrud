function setCSS(a,b){
     $('.selected').css(a,b);
}
function pnm(a,b){
   h= $('.selected').css($(a).val());
   console.log(parseFloat(h));
  if(b=='+'){
      c=parseFloat(h)+parseFloat(h)/10+0.01;
  }else{
       c=parseFloat(h)-parseFloat(h)/10;
  }
  cs=h.replace(parseFloat(h),c);
   console.log(h.replace(parseFloat(h),c));
   $('.selected').css($(a).val(),cs);
}
function newdiv(){
    randomColor=Math.floor(Math.random()*16777215).toString(16);
    $('.selected').append('<div style=\'max-width:100%;height:40px;background-color:#'+randomColor+';\'></div>')
}
function downdiv(){
    selected=$('.selected');
   selected.insertAfter(selected.parent());
 
    
}
function removeDiv(){
   if($('.selected').attr('id')=='pagecontent'){
       $('.selected').html('');
   }else $('.selected').remove();
}
function updiv(){
      selected=$('.selected');
      selected.prev().append(selected);
}
function rightdiv(){
     selected=$('.selected').css('float','right');
}
function leftdiv(){
     selected=$('.selected').css('float','left');
}
function hcenter(){
     selected=$('.selected').css('left','50%');
     $('.selected').css('transform','translate(-50%,0%)');
      
      $('.selected').css('position','relative');
   
   
}
function makeres(leng,r){
     for(i=0;i<8;i++){
          $('.selected').removeClass('_'+r+'r'+i);
     }
        $('.selected').removeClass('_'+r+'rnone');
          $('.selected').removeClass('_'+r+'r');
   $('.selected').attr('class', $('.selected').attr('class')+' _'+r+'r'+leng);
   
   mq=' @media (min-device-width: '+(r-299)+'px) and (max-device-width: '+r+'px) {._'+r+'r'+leng+'{width:'+(100/leng).toFixed(2)+'% !important;'+(leng!='none'?'display:block;':'display:none;')+'}} /*'+leng+r+'*/ ';

   sty=$('.fullpage>style').text();
   sty.search('/*'+leng+r+'*/');
   $('.fullpage>style').remove();
   if(!(sty.includes(r+'r'+leng)))
   sty+=mq;
   
   $('.fullpage').prepend('<style>'+sty+'</style>');
  console.log($('.fullpage').html());
      // $('.fullpage').prepend(mq);
  
}
function center(){
     selected=$('.selected').css('top','50%');
     selected=$('.selected').css('left','50%');
     
      $('.selected').css('position','relative');
     $('.selected').css('transform','translate(-50%,-50%)');
   
}
function savepage(){
    document.getElementById("content").value=document.getElementById('pagecontent').innerHTML;
   document.getElementById("datasource").value=document.getElementById('pds').value;
   document.getElementById("name").value=document.getElementById('pn').value;
      var form = $('#componentform');
    var url = form.attr('action');
    
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               
             
             
               $.get( $('#componentname').val(), function( data1 ) {
                   preview=data1;
                   console.log(data);
 document.getElementById('preview1').innerHTML='<iframe src="'+document.getElementById("name").value+'" width="300" height="500"></iframe>';
                    });
           }
         });
}
function previewpage(){
    savepage();
    var myWindow = window.open(document.getElementById("name").value, "MsgWindow", "width=1000px,height=500px");
}
$('.fullpage a').click(function(e){
   
    e.preventDefault();
    console.log(e);
    return false;
});

document.oncontextmenu=RightMouseDown;
//document.onmousedown = mouseDown; 
var contextmenu=false;

function mouseDown(e) {
   
    if (e.which==3) {//righClick
        pick(document.getElementById('contextmenu'));
      //  contextmenu=true;
         var x = e.pageX;
  var y = e.pageY;
document.getElementById('picked').setAttribute('style','top:'+y+'px;left:'+x+'px;position:absolute;');
    }
}

function addnew(){
    $('.styles').append('<tr><td><input class="chcs" onchange="chcss()" ></td><td><input class="chcs" onchange="chcss()" ></td></tr>')
}
function clickedhere(e) {
    e = e || window.event;
    e = e.target || e.srcElement;
   $('.selected').removeClass('selected');
   cl=e.getAttribute('class')==null?'':e.getAttribute('class');
 e.setAttribute('class',cl+' selected');
  
   
 if(document.getElementById('picked').innerHTML!=''){
    $(e).append(encodeHTML(picked));
   document.getElementById('picked').innerHTML='';
 }else{
     
   $('.divtext').val($('.selected').html());
        // $(hovered).attr('class','selected');
    
    
      document.getElementById('picked').innerHTML='';
       a=e.getAttribute('style');
       if(a!=null){
   a=a.split(';');
  
      $('.styles').html('');
 for(i=0;i<a.length;i++){
     if(a[i]!='')
   $('.styles').append('<tr  onfocusout="hideattrval()"><td class="cattr"><input onfocus="showattr(this)"  autocomplete="off"  class="chcs" onchange="chcss()" value="'+a[i].split(':')[0]+'"></td><td class="cval"><input onfocus="showval(this)" autocomplete="off"  class="chcs" onchange="chcss()" value="'+a[i].split(':')[1]+'"></td></tr>');
   
  
 }
       }
       
        b=e.attributes;
  
      if(b!=null){
      $('.attrs').html('');
     for(i=0;i<b.length;i++){
        $('.attrs').append('<tr  onfocusout="hideattrval()"><td class="cattra"><input onfocus="showattr(this)"  autocomplete="off"  class="chcsa" onchange="chcssa()" value="'+b[i].name+'"></td><td class="cvala"><input onfocus="showval(this)" autocomplete="off"  class="chcsa" onchange="chcssa()" value="'+b[i].value+'"></td></tr>');
   
     }
      }
 }
}
function showattr(a){
    
}
function showval(a){
    
}
function hideattrval(a){
    
}
function chtxt(a){
   
 $('.selected').html(a);
}
function chcss(){
    
   raw=$('.chcs');
   console.log(raw);
   style='';
   for(index=0;index<raw.length;index++){
          
   if(index%2==0)
   style+=raw[index].value+':';
   else
    style+=raw[index].value+';';
   }
console.log(style);
$('.selected').attr('style',style);
}

function chcssa(){
    el= $('.selected');
    attrl=document.getElementsByClassName('selected')[0].attributes.length;
   for(i=0;i<attrl;i++){
     
    document.getElementsByClassName('selected')[0].removeAttribute( document.getElementsByClassName('selected')[0].attributes[0].name);
   }
   raw=$('.chcsa'); 
   console.log(raw);
  
   for(index=0;index<raw.length;index++){
          
   if(index%2==0)
  el.attr(raw[index].value,raw[index+1].value);
  
   }

}
function encodeHTML(encodedString){
var textArea = document.createElement('textarea');
    textArea.innerHTML = encodedString;
    return textArea.value;
}
   
    function myFunction(e) {
  var x = e.pageX+20;
  var y = e.pageY+20;
  if(!contextmenu)
document.getElementById('picked').setAttribute('style','top:'+y+'px;left:'+x+'px;')

}
function setbg(a){
    $('.selected').css('background-image','url('+a.firstChild.innerHTML+')');
    $('.selected').css('background-position','center');
    $('.selected').css('background-repeat','no-repeat');
    $('.selected').css('background-size','cover');
    
}

function pick(a){
	picked=a.firstChild.innerHTML;
	console.log(encodeHTML(picked));
        document.getElementById('picked').innerHTML=a.innerHTML;
document.getElementById('content').value= picked;

document.getElementById('name').value=document.getElementById('picked').firstChild.getAttribute('cname');
document.getElementById('datasource').value=document.getElementById('picked').firstChild.getAttribute('cdatasource');
if(document.getElementById('pds').value.search(document.getElementById('picked').firstChild.getAttribute('cdatasource'))==-1){
document.getElementById('pds').value=document.getElementById('pds').value+',,'+document.getElementById('picked').firstChild.getAttribute('cdatasource');
}
}

    $("#componentform").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');
    
    $.ajax({
           type: "POST",
           url: url,
          data: new FormData(this), // serializes the form's elements.
            processData: false,
            contentType: false,
           success: function(data)
           {
               
             
             
              
 document.getElementById('preview1').innerHTML='<iframe src="'+document.getElementById("name").value+'" width="300" height="500"></iframe>';
                 
           }
         });
		  $.ajax({
           type: "POST",
           url: homedir+'/allcomponents',
          data: new FormData(this), // serializes the form's elements.
            processData : false,
            contentType: false
			
			
			});

    
});
 var picked;
     function setFile(a){
        
         if($('#type').val()=='file'){
              ftype=a.split('.')[a.split('.').length-1];
              fname=a.split('\\')[a.split('\\').length-1];
             $('#name').val(Date.now()+'-'+fname.split('.')[0]);
             $('#datasource').val(ftype);
         }
     }