<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Notificación de Proyecto de Construcción</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
        .content {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Presupuesto Web</h2>
    </div>
    
    <div class="content">
        <p>Hola EPC EAS,</p>
        
        <p>Estoy interesado en una solicitud de cotización:</p>
        
        <ul>
            <li><strong>Nombre:</strong> {{ $name }}</li>
            <li><strong>Correo electrónico:</strong> {{ $email }}</li>
            <li><strong>Proyecto:</strong> {{ $project }}</li>
        </ul>
        
        <p>Muchas gracias espero una respuesta pronta.</p>
    </div>
    
    <div class="footer">
        <p>Este es un mensaje automático, por favor no responda directamente a este correo.</p>
        <p>© {{ date('Y') }} EPC EAS. Todos los derechos reservados.</p>
    </div>
</body>
</html> 