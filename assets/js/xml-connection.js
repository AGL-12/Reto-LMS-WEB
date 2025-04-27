// Función para cargar el archivo XML
function cargarXML() {
    // Crear un objeto XMLHttpRequest para cargar el archivo XML
    let xhr = new XMLHttpRequest();
    xhr.open('GET', '../../XML-XSD/RetoF.xml', true);
    xhr.responseType = 'document';
    xhr.overrideMimeType('text/xml');
    
    xhr.onload = function() {
        if (xhr.readyState === xhr.DONE && xhr.status === 200) {
            procesarDatosXML(xhr.responseXML);
        } else {
            console.error('Error al cargar el archivo XML:', xhr.statusText);
        }
    };
    
    xhr.onerror = function() {
        console.error('Error de red al intentar cargar el XML');
    };
    
    xhr.send();
}

// Función para procesar los datos XML y mostrarlos en la página
function procesarDatosXML(xmlDoc) {
    // Determinar qué página está cargada actualmente para mostrar los datos relevantes
    let currentPage = window.location.pathname.split('/').pop();
    
    switch(currentPage) {
        case 'deportes.html':
            mostrarVehiculosDeporte(xmlDoc);
            break;
        case 'Musica.html':
            // Podrías mostrar vehículos eléctricos (motos, patinetes) en la página de música
            mostrarVehiculosElectricos(xmlDoc);
            break;
        case 'formularioInicioSesion.html':
            // No necesitamos datos XML en esta página
            break;
        case 'parquesTematicos.html':
            mostrarSeguros(xmlDoc);
            break;
        default:
            // Para la página principal o cualquier otra página
            mostrarTodosLosVehiculos(xmlDoc);
    }
}

// Función para mostrar vehículos relacionados con deportes
function mostrarVehiculosDeporte(xmlDoc) {
    // Obtener todos los vehículos
    let vehiculos = xmlDoc.getElementsByTagName('vehiculo');
    let contenidoHTML = '<div class="xml-data"><h3>Vehículos Deportivos Disponibles</h3><div class="cards-container">';
    
    // Iterar sobre cada vehículo
    for (let i = 0; i < vehiculos.length; i++) {
        let tipo = vehiculos[i].getAttribute('tipo');
        let marca = vehiculos[i].getElementsByTagName('marca')[0].textContent;
        let modelo = vehiculos[i].getElementsByTagName('modelo')[0].textContent;
        let precio = vehiculos[i].getElementsByTagName('precio')[0].textContent;
        
        // Crear una tarjeta para cada vehículo
        contenidoHTML += `
            <div class="card">
                <h4>${marca} ${modelo}</h4>
                <p>Tipo: ${tipo}</p>
                <p>Precio: ${precio}€</p>
                <button class="buy-button">RESERVAR</button>
            </div>
        `;
    }
    
    contenidoHTML += '</div></div>';
    
    // Insertar el contenido en la página
    let seccionDeportes = document.getElementById('motor');
    if (seccionDeportes) {
        seccionDeportes.insertAdjacentHTML('afterend', contenidoHTML);
    }
}

// Función para mostrar vehículos eléctricos
function mostrarVehiculosElectricos(xmlDoc) {
    // Obtener todos los vehículos
    let vehiculos = xmlDoc.getElementsByTagName('vehiculo');
    let contenidoHTML = '<div class="xml-data"><h3>Vehículos Eléctricos para Eventos</h3><div class="cards-container">';
    
    // Filtrar por vehículos eléctricos (moto y patinete para este ejemplo)
    for (let i = 0; i < vehiculos.length; i++) {
        let tipo = vehiculos[i].getAttribute('tipo');
        
        // Solo mostrar motos y patinetes (presumiblemente eléctricos)
        if (tipo === 'Moto' || tipo === 'Patinete') {
            let marca = vehiculos[i].getElementsByTagName('marca')[0].textContent;
            let modelo = vehiculos[i].getElementsByTagName('modelo')[0].textContent;
            let precio = vehiculos[i].getElementsByTagName('precio')[0].textContent;
            let autonomia = vehiculos[i].getElementsByTagName('autonomia').length > 0 ? 
                vehiculos[i].getElementsByTagName('autonomia')[0].textContent + ' km' : 'N/A';
            
            // Crear una tarjeta para cada vehículo
            contenidoHTML += `
                <div class="card">
                    <h4>${marca} ${modelo}</h4>
                    <p>Tipo: ${tipo}</p>
                    <p>Autonomía: ${autonomia}</p>
                    <p>Precio: ${precio}€</p>
                    <button class="buy-button">ALQUILAR PARA EVENTO</button>
                </div>
            `;
        }
    }
    
    contenidoHTML += '</div></div>';
    
    // Insertar el contenido en la página
    let seccionFestivales = document.getElementById('festivales');
    if (seccionFestivales) {
        seccionFestivales.insertAdjacentHTML('afterend', contenidoHTML);
    }
}

// Función para mostrar seguros
function mostrarSeguros(xmlDoc) {
    // Obtener todos los seguros
    let seguros = xmlDoc.getElementsByTagName('seguro');
    let contenidoHTML = '<div class="xml-data"><h3>Seguros para Visitas a Parques</h3><div class="cards-container">';
    
    // Iterar sobre cada seguro
    for (let i = 0; i < seguros.length; i++) {
        let id = seguros[i].getAttribute('id');
        let empresa = seguros[i].getElementsByTagName('empresa')[0].textContent;
        let cobertura = seguros[i].getElementsByTagName('cobertura')[0].textContent;
        let precio = seguros[i].getElementsByTagName('precio_anual')[0].textContent;
        let vehiculo = seguros[i].getElementsByTagName('vehiculo')[0].textContent;
        
        // Crear una tarjeta para cada seguro
        contenidoHTML += `
            <div class="card">
                <h4>${empresa}</h4>
                <p>Cobertura: ${cobertura}</p>
                <p>Para: ${vehiculo}</p>
                <p>Precio anual: ${precio}€</p>
                <button class="buy-button">CONTRATAR</button>
            </div>
        `;
    }
    
    contenidoHTML += '</div></div>';
    
    // Insertar el contenido en la página
    let seccionAqua = document.getElementById('aqua');
    if (seccionAqua) {
        seccionAqua.insertAdjacentHTML('afterend', contenidoHTML);
    }
}

// Función para mostrar todos los vehículos (para página principal)
function mostrarTodosLosVehiculos(xmlDoc) {
    // Obtener todos los vehículos
    let vehiculos = xmlDoc.getElementsByTagName('vehiculo');
    let contenidoHTML = '<div class="xml-data"><h3>Nuestros Vehículos</h3><div class="cards-container">';
    
    // Iterar sobre cada vehículo
    for (let i = 0; i < vehiculos.length; i++) {
        let tipo = vehiculos[i].getAttribute('tipo');
        let matricula = vehiculos[i].getAttribute('matricula');
        let marca = vehiculos[i].getElementsByTagName('marca')[0].textContent;
        let modelo = vehiculos[i].getElementsByTagName('modelo')[0].textContent;
        let precio = vehiculos[i].getElementsByTagName('precio')[0].textContent;
        
        // Crear una tarjeta para cada vehículo
        contenidoHTML += `
            <div class="card">
                <h4>${marca} ${modelo}</h4>
                <p>Tipo: ${tipo}</p>
                <p>Matrícula: ${matricula}</p>
                <p>Precio: ${precio}€</p>
                <button class="buy-button">COMPRAR</button>
            </div>
        `;
    }
    
    contenidoHTML += '</div></div>';
    
    // Insertar el contenido en la página principal
    let mainContent = document.querySelector('.container');
    if (mainContent) {
        mainContent.insertAdjacentHTML('beforeend', contenidoHTML);
    }
}

// Agregar estilos CSS para los nuevos elementos
function agregarEstilosXML() {
    let style = document.createElement('style');
    style.textContent = `
        .xml-data {
            margin: 30px 0;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
        }
        
        .xml-data h3 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
    `;
    document.head.appendChild(style);
}

// Iniciar el proceso cuando la página ha terminado de cargar
document.addEventListener('DOMContentLoaded', function() {
    cargarXML();
    agregarEstilosXML();
});