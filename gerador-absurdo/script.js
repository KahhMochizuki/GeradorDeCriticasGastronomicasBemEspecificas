// Funcao que atualiza a frase final
function atualizarFraseFinal() {
    const sujeito = document.getElementById('texto-sujeito').textContent;
    const descricao = document.getElementById('texto-descricao').textContent;
    const acaoTextura = document.getElementById('texto-acao-textura').textContent;

    if (sujeito && descricao && acaoTextura) {
        document.getElementById('frase-completa').innerText = 
            `"${sujeito} foi ${descricao}. ${acaoTextura}."`;
    }
}

// Carrega todas as partes de uma vez
document.getElementById('btnGerarTudo').addEventListener('click', () => {
    fetch('api/controller/controller.php')
        .then(response => response.json())
        .then(data => {
            document.getElementById('resultado-area').style.display = 'block';

            document.getElementById('texto-sujeito').textContent = data.sujeito;
            document.getElementById('texto-descricao').textContent = data.descricao;
            document.getElementById('texto-acao-textura').textContent = data.acao_textura;

            atualizarFraseFinal();
        })
        .catch(error => console.error("Erro ao carregar tudo:", error));
});

// Resorteador das partes específicas
function resortearParte(nomeParte) {
    const elSpan = document.getElementById(`texto-${nomeParte.replace('_', '-')}`);
    elSpan.textContent = "Sorteando... 🎲";

    fetch(`api/controller/controller.php?parte=${nomeParte}`)
        .then(response => response.json())
        .then(data => {
            elSpan.textContent = data[nomeParte];
            atualizarFraseFinal();
        })
        .catch(error => console.error(`Erro ao sortear ${nomeParte}:`, error));
}