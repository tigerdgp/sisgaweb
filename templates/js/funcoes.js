// JavaScript Document

// Função de toggle (exibir / esconder elementos)
$(function(){
    $(".btn-toggle").click(function(e){
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
    });
});

// Função para voltar à página anterior
function voltar() {
	javascript:window.history.go(-1)
}

function getComboA(sel) {
    var value = sel.value;  
}

$(document).ready(function(){ 
  $('#est').change(function(){ 
    var s = $('#est').val();
  });
});