# ✨ Zodíaco Cósmico

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

Um sistema web interativo e visualmente deslumbrante para descobrir signos do zodíaco com base na data de nascimento. Desenvolvido com PHP, Bootstrap e tema galáctico personalizado.

## 🌟 Funcionalidades

- 🔮 **Consulta de Signo**: Descubra seu signo zodiacal inserindo sua data de nascimento
- 🌌 **Tema Galáctico**: Interface visual inspirada no cosmos com animações e efeitos especiais
- ♈ **12 Signos Completos**: Todos os signos do zodíaco com descrições
- 📱 **Design Responsivo**: Funciona perfeitamente em desktop, tablet e mobile
- ✨ **Animações Suaves**: Estrelas em movimento, efeitos hover e transições elegantes
- 🎨 **UI Moderna**: Cards com glass morphism e gradientes vibrantes

## 🚀 Demonstração

O sistema possui duas páginas principais:

1. **Página Inicial**: Formulário para inserir a data de nascimento
2. **Página de Resultado**: Exibe o signo encontrado com símbolo, nome, descrição e período

## 📋 Pré-requisitos

- PHP 7.0 ou superior
- Servidor web (Apache, Nginx, ou PHP built-in server)
- Navegador web moderno

## 🛠️ Instalação

1. **Clone o repositório** ou faça download dos arquivos:

```bash
git clone https://github.com/seu-usuario/zodiaco-cosmico.git
cd zodiaco-cosmico
```

2. **Estrutura de diretórios**:

```
zodiaco-cosmico/
│
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── imgs/
│   └── js/
│
├── layouts/
│   └── header.php
│
├── index.php
├── show_zodiac_sign.php
├── signos.xml
└── README.md
```

3. **Configure o arquivo XML** (signos.xml):

O arquivo `signos.xml` já vem com todos os 12 signos configurados. Estrutura:

```xml
<signos>
  <signo>
    <dataInicio>21/03</dataInicio>
    <dataFim>20/04</dataFim>
    <signoNome>Áries</signoNome>
    <descricao>Corajoso, energético e impulsivo.</descricao>
  </signo>
  <!-- ... outros signos -->
</signos>
```

4. **Inicie o servidor**:

```bash
# Usando PHP built-in server
php -S localhost:8000

# Ou coloque os arquivos na pasta do seu servidor web (htdocs, www, etc.)
```

5. **Acesse no navegador**:

```
http://localhost:8000
```

## 🎨 Personalização

### Cores do Tema

As cores principais estão definidas no arquivo `assets/css/style.css`:

```css
:root {
    --cosmic-purple: #6B46C1;
    --deep-space: #1a0b2e;
    --nebula-pink: #e94560;
    --star-gold: #ffd700;
    --cosmic-blue: #4a5cad;
}
```

### Adicionar ou Modificar Signos

Edite o arquivo `signos.xml` seguindo a estrutura:

```xml
<signo>
    <dataInicio>DD/MM</dataInicio>
    <dataFim>DD/MM</dataFim>
    <signoNome>Nome do Signo</signoNome>
    <descricao>Descrição do signo.</descricao>
</signo>
```

### Símbolos dos Signos

Os símbolos são definidos no array `$emojis` em `show_zodiac_sign.php`:

```php
$emojis = [
    'Áries' => '♈',
    'Touro' => '♉',
    // ... adicione ou modifique conforme necessário
];
```

## 📁 Estrutura de Arquivos

### index.php
Página inicial com formulário de entrada da data de nascimento.

### show_zodiac_sign.php
Página que processa a data e exibe o resultado do signo encontrado.

### layouts/header.php
Template do cabeçalho HTML com imports do Bootstrap e CSS customizado.

### assets/css/style.css
Estilos personalizados com tema galáctico:
- Animações de estrelas
- Glass morphism effects
- Gradientes e sombras
- Responsividade

### signos.xml
Base de dados XML com informações dos 12 signos do zodíaco.

## 🌈 Características Visuais

- **Background Animado**: Estrelas em movimento contínuo
- **Glass Morphism**: Cards semi-transparentes com blur
- **Gradientes Dinâmicos**: Cores que se movem e brilham
- **Efeitos Hover**: Elevação e brilho ao passar o mouse
- **Ícones de Constelação**: Estrelinhas decorativas piscantes
- **Paleta Cósmica**: Roxos, azuis, dourados e rosas vibrantes

## 🔧 Tecnologias Utilizadas

- **PHP**: Processamento backend e manipulação XML
- **Bootstrap 5.2**: Framework CSS responsivo
- **HTML5**: Estrutura semântica
- **CSS3**: Animações e efeitos visuais avançados
- **SimpleXML**: Parser XML do PHP
- **DateTime**: Manipulação de datas

## 📱 Responsividade

O sistema é totalmente responsivo e se adapta a:
- 📱 Mobile (320px+)
- 📱 Tablet (768px+)
- 💻 Desktop (1024px+)

## ⚡ Performance

- Animações otimizadas com CSS
- Carregamento rápido
- Sem dependências JavaScript pesadas
- XML leve e eficiente

## 🤝 Contribuindo

Contribuições são bem-vindas! Sinta-se livre para:

1. Fazer fork do projeto
2. Criar uma branch para sua feature (`git checkout -b feature/NovaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona nova feature'`)
4. Push para a branch (`git push origin feature/NovaFeature`)
5. Abrir um Pull Request

## 📝 Ideias para Melhorias

- [ ] Adicionar mais informações sobre cada signo
- [ ] Sistema de compatibilidade entre signos
- [ ] Horóscopo diário
- [ ] Compartilhamento em redes sociais
- [ ] Modo claro/escuro
- [ ] Múltiplos idiomas
- [ ] Animações de transição de página
- [ ] Sons temáticos

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo `LICENSE` para mais detalhes.

## 👨‍💻 Autor

Desenvolvido pr Hugo de Sousa Silva ✨

## 🌟 Agradecimentos

- Bootstrap pela framework responsivo
- Comunidade PHP pela documentação
- Você por usar este projeto!

---

⭐ Se você gostou deste projeto, não esqueça de dar uma estrela!

🌙 Que as estrelas guiem seu caminho! ✨
