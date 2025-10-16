<?php include('layouts/header.php'); ?>

<body>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
                <h1 class="cosmic-title display-3 fw-bold mb-3">
                    ✨ Zodíaco Cósmico ✨
                </h1>
                <p class="text-white-50 fs-5">
                    Descubra os segredos das estrelas e encontre seu signo no universo
                </p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <h3 class="text-center mb-0">
                            🌟 Portal das Estrelas 🌟
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="show_zodiac_sign.php" method="POST">
                            <div class="mb-4">
                                <label for="data_nascimento" class="form-label">
                                    ⭐ Data de Nascimento
                                </label>
                                <input type="date" 
                                       class="form-control form-control-lg" 
                                       id="data_nascimento" 
                                       name="data_nascimento" 
                                       required
                                       max="<?php echo date('Y-m-d'); ?>">
                                <small class="text-white-50 d-block mt-2">
                                    Insira sua data de nascimento para descobrir seu signo
                                </small>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    🔮 Revelar Meu Signo
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center" style="background: rgba(42, 23, 80, 0.5); border-top: 1px solid rgba(138, 97, 255, 0.3);">
                        <small class="text-white-50">
                            ✨ Conecte-se com o cosmos ✨
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decoração de constelações -->
        <div class="text-center mt-5">
            <span class="constellation-icon me-3"></span>
            <span class="constellation-icon me-3"></span>
            <span class="constellation-icon me-3"></span>
            <span class="constellation-icon me-3"></span>
            <span class="constellation-icon"></span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>