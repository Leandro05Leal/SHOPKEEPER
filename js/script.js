
// CONFIRMAÇÃO ANTES DE EXCLUIR
function confirmarExclusao() {
    return confirm("Tem certeza que deseja excluir este produto?");
}

// VALIDAÇÃO DOS FORMULÁRIOS
document.addEventListener("DOMContentLoaded", function() {

    const formularios = document.querySelectorAll("form");

    formularios.forEach(function(formulario) {

        formulario.addEventListener("submit", function(event) {

            const campos = formulario.querySelectorAll(
                "input[required], textarea[required]"
            );

            for (let campo of campos) {

                if (campo.value.trim() === "") {
                    alert("Por favor, preencha todos os campos obrigatórios!");
                    campo.focus();
                    event.preventDefault();
                    return;
                }

            }

        });

    });

});
