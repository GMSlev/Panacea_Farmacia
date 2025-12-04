// FUNÇÃO PARA PEGAR A DATA DE HOJE (BRASÍLIA)

function dataBrasiliaHoje() {
    const agora = new Date();
    const utc = agora.getTime() + (agora.getTimezoneOffset() * 60000);
    const brasilia = new Date(utc - (3 * 60 * 60 * 1000));
    brasilia.setHours(0, 0, 0, 0);
    return brasilia.toISOString().split("T")[0];
}

const dataInput = document.getElementById("data");
const hojeBrasilia = dataBrasiliaHoje();
dataInput.value = hojeBrasilia;
dataInput.min = hojeBrasilia;
dataInput.max = hojeBrasilia;


// Pega input
const senhaInput = document.getElementById("senha");

// Cria contêiner para alinhar os dois lado a lado
const senhaContainer = document.createElement("div");
senhaContainer.style.display = "flex";
senhaContainer.style.alignItems = "center";
senhaContainer.style.gap = "10px";

// Insere o container no lugar do campo original
senhaInput.parentNode.insertBefore(senhaContainer, senhaInput);

// Move o input de senha para dentro do container
senhaContainer.appendChild(senhaInput);

// Cria botão mostrar/ocultar
const btnToggle = document.createElement("button");
btnToggle.textContent = "Mostrar";
btnToggle.type = "button";
btnToggle.style.padding = "6px 10px";
btnToggle.style.cursor = "pointer";
btnToggle.style.borderRadius = "5px";
btnToggle.style.border = "1px solid #777";
btnToggle.style.background = "#eee";

// Adiciona o botão ao lado da senha
senhaContainer.appendChild(btnToggle);

// Lógica mostrar/ocultar senha
btnToggle.addEventListener("click", () => {
    if (senhaInput.type === "password") {
        senhaInput.type = "text";
        btnToggle.textContent = "Ocultar";
    } else {
        senhaInput.type = "password";
        btnToggle.textContent = "Mostrar";
    }
});



// BARRA DE FORÇA DA SENHA

const barra = document.createElement("div");
barra.style.height = "8px";
barra.style.width = "0%";
barra.style.background = "red";
barra.style.borderRadius = "6px";
barra.style.marginTop = "8px";
barra.style.marginBottom = "15px";
barra.style.transition = "0.3s";

// Adiciona a barra abaixo do container da senha
senhaContainer.insertAdjacentElement("afterend", barra);

senhaInput.addEventListener("input", () => {
    const senha = senhaInput.value;
    let forca = 0;

    if (senha.length >= 6) forca++;
    if (/[A-Z]/.test(senha)) forca++;
    if (/[0-9]/.test(senha)) forca++;
    if (/[!@#$%^&*()_\-+=]/.test(senha)) forca++;

    barra.style.width = `${forca * 25}%`;

    if (forca === 0) barra.style.background = "red";
    if (forca === 1) barra.style.background = "red";
    if (forca === 2) barra.style.background = "orange";
    if (forca === 3) barra.style.background = "yellow";
    if (forca === 4) barra.style.background = "green";
});



// VALIDAÇÕES DO FORMULÁRIO

const form = document.querySelector("form");

form.addEventListener("submit", function (event) {
    const nome = document.getElementById("nome").value.trim();
    const senha = senhaInput.value.trim();
    const data = dataInput.value.trim();

    let erro = false;

    // e-mail válido
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(nome)) {
        alert("Digite um e-mail válido no campo Nome.");
        erro = true;
    }

    // senha mínima
    if (senha.length < 6) {
        alert("A senha deve ter no mínimo 6 caracteres.");
        erro = true;
    }

    // data igual à de hoje
    if (data !== hojeBrasilia) {
        alert("A data deve ser a de hoje (Brasília).");
        erro = true;
    }

    if (erro) {
        event.preventDefault();
        return;
    }

    // SUCESSO
    alert("Formulário cadastrado com sucesso!");
});



// ANIMAÇÃO NOS BOTÕES

const botoes = document.querySelectorAll("button, input[type='submit']");

botoes.forEach(btn => {
    btn.style.transition = "0.2s";

    btn.addEventListener("mouseover", () => {
        btn.style.transform = "scale(1.05)";
        btn.style.opacity = "0.9";
    });

    btn.addEventListener("mouseout", () => {
        btn.style.transform = "scale(1)";
        btn.style.opacity = "1";
    });

    btn.addEventListener("mousedown", () => {
        btn.style.transform = "scale(0.9)";
    });

    btn.addEventListener("mouseup", () => {
        btn.style.transform = "scale(1.05)";
    });
});
