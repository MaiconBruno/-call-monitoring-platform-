function validaForm(frm){
    if(frm.filtroTipo.value == 'padrao'){
        alert('Escolha um tipo de filtro!');
        return false;
    }
}

function validaFormGrAvaliadasNaoAvaliadas(frm){
    console.log('funciona');
    if(frm.opcaoAvaliadasNaoAvalidasMes.value == 'padrao' || frm.opcaoAvaliadasNaoAvalidasAno.value == 'padrao'){
        alert('Preencha os filtros!');
        return false;
    }
}