// Seleciona todos os botões da página
const botoes = document.querySelectorAll("button");

// Aplica efeitos a cada botão
botoes.forEach(btn => 
    
    // Configuração inicial
    
    btn.style.position = "relative";
    btn.style.overflow = "hidden";
    btn.style.transition = "all 0.25s ease";
    btn.style.borderRadius = "8px";
    btn.style.border = "2px solid #1b7737";
    btn.style.backgroundColor = "#1b7737";
    btn.style.color = "white";
    btn.style.fontWeight = "600";
    btn.style.padding = "10px 18px";
    btn.style.letterSpacing = "0.5px";

    
    // 1) Efeito onda
    
    btn.addEventListener("click", function(e) {
        const ripple = document.createElement("span");
        const rect = btn.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);

        ripple.style.width = ripple.style.height = `${size}px`;
        ripple.style.left = `${e.clientX - rect.left - size / 2}px`;
        ripple.style.top = `${e.clientY - rect.top - size / 2}px`;
        ripple.classList.add("ripple-effect");

        btn.appendChild(ripple);
        setTimeout(() => ripple.remove(), 600);
    });

    
    // 2) Animação do hover
   
    btn.addEventListener("mouseenter", () => {
        btn.style.transform = "scale(1.12)";
        btn.style.boxShadow = "0 0 18px rgba(27, 119, 55, 0.8)";
        btn.style.filter = "brightness(1.25)";
        btn.style.letterSpacing = "1px";
    });

    btn.addEventListener("mouseleave", () => {
        btn.style.transform = "scale(1)";
        btn.style.boxShadow = "none";
        btn.style.filter = "brightness(1)";
        btn.style.letterSpacing = "0.5px";
    });

    
    // 3) Animação texto
    
    btn.addEventListener("mouseenter", () => {
        btn.style.textShadow = "0 0 6px white";
    });

    btn.addEventListener("mouseleave", () => {
        btn.style.textShadow = "none";
    });

});



// Efeito onda ao clicar

const rippleCSS = document.createElement("style");
rippleCSS.textContent = `
    .ripple-effect {
        position: absolute;
        border-radius: 50%;
        background: rgba(52, 235, 15, 0.7);
        transform: scale(0);
        animation: ripple-grow 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple-grow {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleCSS);

