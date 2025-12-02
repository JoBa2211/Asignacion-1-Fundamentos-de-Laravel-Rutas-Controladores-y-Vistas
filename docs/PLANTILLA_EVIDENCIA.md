# Plantilla de Evidencia - Asignación 1

A continuación pega el contenido del documento que vas a convertir a PDF y sube las capturas a `docs/screenshots/`.

---

**Portada**

- **Título:** Asignación 1: Fundamentos de Laravel - Rutas, Controladores y Vistas
- **Repositorio:** https://github.com/JoBa2211/Asignacion-1-Fundamentos-de-Laravel-Rutas-Controladores-y-Vistas
- **Autor:** [Tu nombre]
- **Fecha:** 2025-12-02

**Objetivo**

- **Descripción:** Verificar y documentar el correcto funcionamiento de las rutas `/bienvenida` (estática) y `/saludo/{nombre}` (dinámica) en la aplicación Laravel creada para esta asignación.

**Entorno**

- **Sistema operativo:** Windows
- **PHP:** 8.2.x (CLI)
- **Composer:** 2.x
- **Proyecto local:** `C:\xampp\htdocs\hola-mundo`
- **Servidor de desarrollo:** `php artisan serve` (http://127.0.0.1:8000)

**Pasos para ejecutar la aplicación**

```powershell
cd C:\xampp\htdocs\hola-mundo
composer install        # solo si falta vendor
copy .env.example .env
php artisan key:generate
php artisan migrate     # opcional (el proyecto viene con sqlite configurado)
php artisan serve --host=127.0.0.1 --port=8000
```

**Rutas a comprobar**

- **Ruta estática:** `/bienvenida`  
  - URL de ejemplo: `http://127.0.0.1:8000/bienvenida`  
  - Resultado esperado en la vista Blade: `Bienvenido a mi primera aplicación de Laravel`
- **Ruta dinámica:** `/saludo/{nombre}`  
  - URL de ejemplo: `http://127.0.0.1:8000/saludo/jose`  
  - Resultado esperado en la vista Blade: `Hola jose`

**Evidencia requerida (capturas y leyendas sugeridas)**

- `docs/screenshots/bienvenida.png` — "Captura de `/bienvenida` mostrando el mensaje estático de bienvenida."  
- `docs/screenshots/saludo_jose.png` — "Captura de `/saludo/jose` mostrando saludo dinámico 'Hola jose'."  
- (Opcional) `docs/screenshots/terminal_serve.png` — "Terminal mostrando el servidor de desarrollo activo."

**Instrucciones para subir las capturas**

1. Coloca las imágenes en la carpeta `docs/screenshots/` en tu copia local del repositorio.
2. Desde PowerShell en el directorio del proyecto ejecuta:

```powershell
git add docs/screenshots/*
git add docs/PLANTILLA_EVIDENCIA.md
git commit -m "Add evidence template and screenshots"
git push origin master
```

Si tu rama principal es `main`, reemplaza `master` por `main`.

---

Firma: [Tu nombre]
