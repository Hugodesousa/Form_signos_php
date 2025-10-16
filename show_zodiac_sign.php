<?php include('layouts/header.php'); ?>

<body>
    <div class="container mt-5 pt-4">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10 text-center">
                <h1 class="cosmic-title display-4 fw-bold mb-2">
                    🌌 Seu Destino nas Estrelas 🌌
                </h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['data_nascimento'])) {
                    $data_nascimento = $_POST['data_nascimento'];
                    
                    $data = DateTime::createFromFormat('Y-m-d', $data_nascimento);
                    
                    if ($data) {
                        $dia = (int)$data->format('d');
                        $mes = (int)$data->format('m');
                        
                        $signos = simplexml_load_file("signos.xml");
                        
                        $signo_encontrado = null;
                        
                        foreach ($signos->signo as $signo) {
                            list($diaIni, $mesIni) = explode('/', $signo->dataInicio);
                            list($diaFim, $mesFim) = explode('/', $signo->dataFim);
                            
                            $diaIni = (int)$diaIni;
                            $mesIni = (int)$mesIni;
                            $diaFim = (int)$diaFim;
                            $mesFim = (int)$mesFim;
                            
                            $dentroDoRange = false;
                            
                            if ($mesIni == $mesFim) {
                                $dentroDoRange = ($mes == $mesIni && $dia >= $diaIni && $dia <= $diaFim);
                            } else {
                                $dentroDoRange = (
                                    ($mes == $mesIni && $dia >= $diaIni) ||
                                    ($mes == $mesFim && $dia <= $diaFim)
                                );
                            }
                            
                            if ($dentroDoRange) {
                                $signo_encontrado = $signo;
                                break;
                            }
                        }
                        
                        if ($signo_encontrado) {
                            // Emojis para cada signo
                            $emojis = [
                                'Áries' => '♈',
                                'Touro' => '♉',
                                'Gêmeos' => '♊',
                                'Câncer' => '♋',
                                'Leão' => '♌',
                                'Virgem' => '♍',
                                'Libra' => '♎',
                                'Escorpião' => '♏',
                                'Sagitário' => '♐',
                                'Capricórnio' => '♑',
                                'Aquário' => '♒',
                                'Peixes' => '♓'
                            ];
                            
                            $emoji = $emojis[(string)$signo_encontrado->signoNome] ?? '⭐';
                            
                            echo '<div class="card shadow-lg card-success">';
                            echo '<div class="card-header text-center">';
                            echo '<h3 class="mb-0">✨ Seu Signo Revelado ✨</h3>';
                            echo '</div>';
                            echo '<div class="card-body text-center signo-result">';
                            echo '<div class="mb-4">';
                            echo '<span style="font-size: 5rem;">' . $emoji . '</span>';
                            echo '</div>';
                            echo '<h2 class="mb-4">' . $signo_encontrado->signoNome . '</h2>';
                            echo '<div class="mb-4">';
                            echo '<span class="constellation-icon me-2"></span>';
                            echo '<span class="constellation-icon me-2"></span>';
                            echo '<span class="constellation-icon me-2"></span>';
                            echo '</div>';
                            echo '<p class="lead mb-4">' . $signo_encontrado->descricao . '</p>';
                            echo '<div class="p-3 rounded" style="background: rgba(255, 215, 0, 0.1); border: 1px solid rgba(255, 215, 0, 0.3);">';
                            echo '<p class="text-muted mb-0">';
                            echo '🌙 Período: ' . $signo_encontrado->dataInicio . ' - ' . $signo_encontrado->dataFim;
                            echo '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        } else {
                            echo '<div class="alert alert-warning text-center">';
                            echo '⚠️ Não foi possível determinar o signo para esta data.';
                            echo '</div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger text-center">';
                        echo '❌ Data inválida! Por favor, insira uma data válida.';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="alert alert-warning text-center">';
                    echo '⚠️ Nenhuma data foi informada.';
                    echo '</div>';
                }
                ?>
                
                <div class="text-center mt-4 mb-4">
                    <a href="index.php" class="btn btn-secondary btn-lg">
                        ← Voltar ao Portal
                    </a>
                </div>

                <div class="text-center mt-4">
                    <span class="constellation-icon me-3"></span>
                    <span class="constellation-icon me-3"></span>
                    <span class="constellation-icon me-3"></span>
                    <span class="constellation-icon me-3"></span>
                    <span class="constellation-icon"></span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>