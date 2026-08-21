<?php
class GerarModel {
    private $sujeitos = [
        "O Risoto de Cogumelos",
        "O Hot Dog do Calabouço",
        "A Lagosta ao Molho Especial",
        "O Hambúrguer Artesanal Supremo",
        "A Sopa de Cebola Solitária",
        "O Miojo das Três da Manhã",
        "O Petit Gâteau Dramático",
        "A Marmita Fria da Quinta-Feira"
    ];

    private $descricoes = [
        "uma tragédia em forma de comida",
        "uma obra-prima melancólica",
        "um atentado ao bom senso e à decência",
        "uma sinfonia de sabores catastróficos",
        "um poema triste servido num prato frio",
        "uma ilusão sensorial duvidosa"
    ];

    private $acoesTexturas = [
        "com a textura de um pneu de trator cozido no vapor, ele destruiu meu paladar e minha esperança na humanidade",
        "derretendo como as falsas promessas do chef, ele me fez chorar lágrimas de mais puro desespero",
        "crocante como a dura e amarga realidade da vida, ele abraçou minha alma de um jeito constrangedor",
        "parecendo um purê de decepções, ele insultou três gerações da minha família",
        "com uma consistência que desafia as leis da física e da ética, ele me provocou um profundo vazio existencial"
    ];

    public function getSujeitoAleatorio() {
        return $this->sujeitos[array_rand($this->sujeitos)];
    }

    public function getDescricaoAleatoria() {
        return $this->descricoes[array_rand($this->descricoes)];
    }

    public function getAcaoTexturaAleatoria() {
        return $this->acoesTexturas[array_rand($this->acoesTexturas)];
    }

    public function gerarFraseCompleta() {
        return [
            "sujeito" => $this->getSujeitoAleatorio(),
            "descricao" => $this->getDescricaoAleatoria(),
            "acaoTextura" => $this->getAcaoTexturaAleatoria()
        ];
    }
}
?>