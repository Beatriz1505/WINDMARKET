<?php

namespace Database\Seeders;

use App\Models\Turbina;
use Illuminate\Database\Seeder;

class TurbinaSeeder extends Seeder
{
    /**
     * Popula o banco com turbinas de exemplo para demonstração do marketplace.
     */
    public function run(): void
    {
        $turbinas = [
            [
                'nome'        => 'AeroForce V12',
                'descricao'   => 'Turbina de médio porte ideal para fazendas e propriedades rurais. Alta eficiência em ventos de baixa velocidade. Estrutura em aço galvanizado com vida útil de 25 anos.',
                'potencia_kw' => 50.00,
                'preco'       => 85000.00,
                'fabricante'  => 'Vestas',
                'disponivel'  => true,
            ],
            [
                'nome'        => 'StormRider X3',
                'descricao'   => 'Modelo compacto para instalação residencial ou pequenas indústrias. Baixo nível de ruído, partida automática a 2,5 m/s de vento e manutenção anual simplificada.',
                'potencia_kw' => 10.00,
                'preco'       => 28000.00,
                'fabricante'  => 'Enercon',
                'disponivel'  => true,
            ],
            [
                'nome'        => 'TempestPro 2200',
                'descricao'   => 'Turbina industrial de grande porte para parques eólicos offshore e onshore. Alta durabilidade em condições extremas, certificação IEC Classe S.',
                'potencia_kw' => 2200.00,
                'preco'       => 4500000.00,
                'fabricante'  => 'Siemens Gamesa',
                'disponivel'  => true,
            ],
            [
                'nome'        => 'BreezeLight Mini',
                'descricao'   => 'Microturbina para uso em barcos, cabanas e sistemas off-grid. Instalação em menos de 2 horas, peso de apenas 7 kg e compatível com baterias 12V/24V.',
                'potencia_kw' => 1.50,
                'preco'       => 4200.00,
                'fabricante'  => 'Marlec',
                'disponivel'  => true,
            ],
            [
                'nome'        => 'GaleForce 500',
                'descricao'   => 'Solução de médio porte para cooperativas e condomínios industriais. Excelente custo-benefício com retorno do investimento estimado em 6 anos.',
                'potencia_kw' => 500.00,
                'preco'       => 620000.00,
                'fabricante'  => 'WEG',
                'disponivel'  => false,
            ],
            [
                'nome'        => 'WindBlade Pro Urban',
                'descricao'   => 'Turbina de eixo vertical, ideal para ambientes urbanos com vento turbulento. Design silencioso e estético, aprovada para instalação em telhados de edifícios.',
                'potencia_kw' => 5.00,
                'preco'       => 15000.00,
                'fabricante'  => 'Urban Green Energy',
                'disponivel'  => true,
            ],
        ];

        foreach ($turbinas as $dados) {
            Turbina::create($dados);
        }
    }
}
