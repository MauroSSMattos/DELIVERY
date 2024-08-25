document.addEventListener('DOMContentLoaded', function() {
    const supplierBar = document.querySelector('.supplier-bar');
    const deliveryBar = document.querySelector('.delivery-bar');
    const acceptButton = document.getElementById('accept-button');
    const cancelButton = document.getElementById('cancel-button');
    const messageBox = document.querySelector('.message-box');
    const contactWhatsappButton = document.getElementById('contact-whatsapp');
    let interval;

    // Desabilitar o botão de WhatsApp inicialmente
    contactWhatsappButton.disabled = true;

    // Função para fazer a barra de carregamento piscar
    function blinkBar(bar, message, callback) {
        let count = 0;
        interval = setInterval(function() {
            count++;
            if (count % 2 === 0) {
                bar.style.backgroundColor = 'transparent';
            } else {
                bar.style.backgroundColor = 'yellow';
            }
            if (count >= 20) { // 15 iterações para 7.5 segundos (cada iteração é 500ms)
                clearInterval(interval);
                // Após os 7.5 segundos, a barra ficará verde
                bar.style.backgroundColor = 'green';
                // Emitir mensagem após a barra parar de piscar
                messageBox.textContent = message;
                if (callback) callback();
            }
        }, 400); // 500 milissegundos = meio segundo
    }

    // Verificar se ambas as barras estão verdes
    function checkIfBothBarsGreen() {
        if (supplierBar.style.backgroundColor === 'green' && deliveryBar.style.backgroundColor === 'green') {
            contactWhatsappButton.disabled = false; // Habilitar o botão de WhatsApp
        }
    }

    // Confirmação do pedido
    acceptButton.addEventListener('click', function () {
        blinkBar(supplierBar, "Um fornecedor já aceitou seu pedido.", function() {
            setTimeout(function() {
                blinkBar(deliveryBar, "Um fornecedor e o entregador já aceitaram seu pedido.", checkIfBothBarsGreen);
            }, 1000); // Inicia a animação do entregador após 10 segundos
        });
    });

    // Cancelamento do pedido
    cancelButton.addEventListener('click', function () {
        clearInterval(interval); // Para a animação de piscar
        supplierBar.style.backgroundColor = 'red'; // Remove a cor da barra
        deliveryBar.style.backgroundColor = 'red'; // Remove a cor da barra
        messageBox.textContent = "Pedido cancelado."; // Exibe mensagem de cancelamento

        // Desabilitar o botão de WhatsApp se o pedido for cancelado
        contactWhatsappButton.disabled = true;
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const debitButton = document.getElementById('debit-button');
    const creditButton = document.getElementById('credit-button');
    const acceptButton = document.getElementById('accept-button');
    const cancelButton = document.getElementById('cancel-button');
    const messageBox = document.querySelector('.messagem-box');
  
    // Desabilitar os botões de aceitar, cancelar, e WhatsApp inicialmente
    acceptButton.disabled = true;
    cancelButton.disabled = true;
    const contactWhatsappButton = document.getElementById('contact-whatsapp');
    contactWhatsappButton.disabled = true;
  
    // Função para habilitar ou desabilitar os botões de aceitar e cancelar
    function toggleActionButtons() {
        if (debitButton.classList.contains('selected') || creditButton.classList.contains('selected')) {
            acceptButton.disabled = false; // Habilita o botão se uma opção de pagamento estiver selecionada
            cancelButton.disabled = false; // Habilita o botão se uma opção de pagamento estiver selecionada
        } else {
            acceptButton.disabled = true; // Desabilita o botão se nenhuma opção de pagamento estiver selecionada
            cancelButton.disabled = true; // Desabilita o botão se nenhuma opção de pagamento estiver selecionada
        }
    }
  
    // Marcar o botão de débito quando clicado
    debitButton.addEventListener('click', function() {
        const confirmed = confirm("Você selecionou Débito como método de pagamento. Deseja confirmar?");
        if (confirmed) {
            debitButton.classList.add('selected');
            creditButton.classList.remove('selected');
            messageBox.textContent = "Método de pagamento selecionado: Débito";
            toggleActionButtons(); // Verifica se os botões de aceitar e cancelar devem ser habilitados ou desabilitados
        }
    });
  
    // Marcar o botão de crédito quando clicado
    creditButton.addEventListener('click', function() {
        const confirmed = confirm("Você selecionou Crédito como método de pagamento. Deseja confirmar?");
        if (confirmed) {
            creditButton.classList.add('selected');
            debitButton.classList.remove('selected');
            messageBox.textContent = "Método de pagamento selecionado: Crédito";
            toggleActionButtons(); // Verifica se os botões de aceitar e cancelar devem ser habilitados ou desabilitados
        }
    });
  
    
});

document.addEventListener('DOMContentLoaded', function() {
    const contactWhatsappButton = document.getElementById('contact-whatsapp');
    
    contactWhatsappButton.addEventListener('click', function() {
        const supplierMessage = "Olá, gostaria de falar com o fornecedor sobre o meu pedido.";
        const deliveryMessage = "Olá, gostaria de falar com o entregador sobre o meu pedido.";
        
        const encodedSupplierMessage = encodeURIComponent(supplierMessage);
        const encodedDeliveryMessage = encodeURIComponent(deliveryMessage);
        
        // Número do WhatsApp do fornecedor e do entregador
        const supplierNumber = "5511999999999"; // Substitua pelo número real do fornecedor
        const deliveryNumber = "5511988888888"; // Substitua pelo número real do entregador
        
        const whatsappLinkSupplier = `https://wa.me/${supplierNumber}?text=${encodedSupplierMessage}`;
        const whatsappLinkDelivery = `https://wa.me/${deliveryNumber}?text=${encodedDeliveryMessage}`;
        
        // Exemplo: abre o WhatsApp do fornecedor (você pode alternar para o entregador se necessário)
        window.open(whatsappLinkSupplier, '_blank');
    });
});