function actualizarSimulacion() {
    const aerosoles = document.getElementById('aerosoles').value;
    const healthBar = document.getElementById('healthBar');
    const ecosystemStatus = document.getElementById('ecosystemStatus');
    const ecosystemAnimation = document.getElementById('ecosystemAnimation');
    const aerosolValue = document.getElementById('aerosolValue');

    // Convierte el valor del rango a AOD
    const aodValue = (aerosoles / 100) * 0.9 + 0.1; // Convertir rango [1-100] a [0.1-1.0]
    aerosolValue.textContent = aodValue.toFixed(2); // Muestra el valor actual de AOD

    // Actualiza la barra de salud del ecosistema según la cantidad de aerosoles
    if (aodValue < 0.3) {
        healthBar.style.width = '80%';
        healthBar.classList.remove('medium', 'low');
        healthBar.classList.add('high');
        ecosystemStatus.textContent = 'El ecosistema está saludable con poca cantidad de aerosoles.';

        // Cambia la animación a un ecosistema saludable
        ecosystemAnimation.src = 'assets/images/saludable.gif';  // Animación del ecosistema saludable
        ecosystemAnimation.alt = 'Ecosistema saludable';
    } else if (aodValue >= 0.3 && aodValue <= 0.7) {
        healthBar.style.width = '50%';
        healthBar.classList.remove('high', 'low');
        healthBar.classList.add('medium');
        ecosystemStatus.textContent = 'El ecosistema se ve afectado con una cantidad moderada de aerosoles.';

        // Cambia la animación a un ecosistema afectado
        ecosystemAnimation.src = 'assets/images/afectado.gif';  // Animación del ecosistema afectado
        ecosystemAnimation.alt = 'Ecosistema afectado';
    } else {
        healthBar.style.width = '20%';
        healthBar.classList.remove('high', 'medium');
        healthBar.classList.add('low');
        ecosystemStatus.textContent = 'El ecosistema está en peligro debido a una alta cantidad de aerosoles.';

        // Cambia la animación a un ecosistema en peligro
        ecosystemAnimation.src = 'assets/images/peligro.gif';  // Animación del ecosistema en peligro
        ecosystemAnimation.alt = 'Ecosistema en peligro';
    }
    
}


