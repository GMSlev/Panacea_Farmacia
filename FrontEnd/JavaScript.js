    document.addEventListener("DOMContentLoaded", () => {
    console.log("Panácea carregado com sucesso!");

    // ======== ANIMAÇÃO DE ENTRADA ========
    document.body.style.opacity = "0";
    document.body.style.transition = "opacity 0.6s ease";
    setTimeout(() => (document.body.style.opacity = "1"), 50);

    // Função de transição suave entre páginas
    function transicaoPagina(destino, confirmarVoltar = false) {
        if (confirmarVoltar) {
            const confirmar = confirm("Deseja realmente retornar à tela inicial?");
            if (!confirmar) return; // cancela se o usuário não confirmar
        }

        document.body.style.transition = "opacity 0.4s ease";
        document.body.style.opacity = "0";
        setTimeout(() => (window.location.href = destino), 400);
    }

    // ======== NAVEGAÇÃO DOS BOTÕES ========

    const botoes = document.querySelectorAll("nav button");
    const rotas = {
        "Emissões": "emissoes.html",
        "Relatórios": "relatorios.html",
        "Estoque": "estoque.html",
        "Financeiro": "financeiro.html",
        "Configurações": "configuracoes.html",
        "Ajuda": "ajuda.html",
        "Sair": "login.html",
        "CRM": "crm.html",
        "Vendas": "vendas.html",
        "Ferramentas": "ferramentas.html",
        "Janelas": "janelas.html"
    };

    botoes.forEach(btn => {
        const nome = btn.innerText.trim();

        // Animações visuais básicas
        btn.addEventListener("mouseover", () => {
            btn.style.transition = "all 0.2s ease";
            btn.style.backgroundColor = "#0078D7";
            btn.style.color = "white";
            btn.style.transform = "scale(1.05)";
        });
        btn.addEventListener("mouseout", () => {
            btn.style.backgroundColor = "";
            btn.style.color = "";
            btn.style.transform = "scale(1)";
        });

        // Clique — redireciona ou pergunta antes de sair
        btn.addEventListener("click", () => {
            if (nome === "Sair") {
                const confirmar = confirm("Deseja realmente sair do sistema?");
                if (confirmar) transicaoPagina(rotas["Sair"]);
                return;
            }

            const destino = rotas[nome];
            if (destino) {
                transicaoPagina(destino);
            } else {
                alert(`Função "${nome}" ainda não implementada.`);
            }
        });
    });

    // ======== LINKS DO MENU (Consultas e Formulários) ========

    const links = document.querySelectorAll("nav a");
    links.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            const destino = link.getAttribute("href");

            // Se o destino for "home" ou página inicial, confirmar antes
            if (destino.toLowerCase().includes("index") || destino.toLowerCase().includes("home")) {
                transicaoPagina(destino, true);
            } else {
                transicaoPagina(destino);
            }
        });
    });

    // ======== LIGHTBOX NO LOGO ========
    const logo = document.querySelector("header img");
    if (logo) {
        // Cria overlay dinâmico
        const overlay = document.createElement("div");
        overlay.style.position = "fixed";
        overlay.style.top = "0";
        overlay.style.left = "0";
        overlay.style.width = "100%";
        overlay.style.height = "100%";
        overlay.style.background = "rgba(0,0,0,0.8)";
        overlay.style.display = "none";
        overlay.style.justifyContent = "center";
        overlay.style.alignItems = "center";
        overlay.style.zIndex = "9999";
        overlay.style.transition = "opacity 0.3s ease";
        overlay.style.cursor = "zoom-out";

        const imgAmpliada = document.createElement("img");
        imgAmpliada.src = logo.src;
        imgAmpliada.alt = "Logo ampliada";
        imgAmpliada.style.maxWidth = "80%";
        imgAmpliada.style.maxHeight = "80%";
        imgAmpliada.style.borderRadius = "8px";
        imgAmpliada.style.boxShadow = "0 0 25px rgba(255,255,255,0.4)";
        imgAmpliada.style.opacity = "0";
        imgAmpliada.style.transition = "opacity 0.4s ease";

        overlay.appendChild(imgAmpliada);
        document.body.appendChild(overlay);

        logo.style.cursor = "pointer";
        logo.addEventListener("mouseover", () => {
            logo.style.transition = "transform 0.3s ease";
            logo.style.transform = "scale(1.05)";
        });
        logo.addEventListener("mouseout", () => {
            logo.style.transform = "scale(1)";
        });

        logo.addEventListener("click", () => {
            overlay.style.display = "flex";
            setTimeout(() => {
                overlay.style.opacity = "1";
                imgAmpliada.style.opacity = "1";
            }, 10);
        });

        overlay.addEventListener("click", () => {
            overlay.style.opacity = "0";
            imgAmpliada.style.opacity = "0";
            setTimeout(() => (overlay.style.display = "none"), 300);
        });
    }

    // ======== CONFIRMAÇÃO AO RETORNAR PARA HOME ========
    const logoHome = document.querySelector("header h1");
    if (logoHome) {
        logoHome.style.cursor = "pointer";
        logoHome.addEventListener("click", () => {
            transicaoPagina("index.html", true); // Pergunta antes de retornar
        });
    }
});
