# 🚀 Astro Cuts

Sistema integral de gestión para la barbería **ASTRO CUTS**, desarrollado para optimizar la administración de citas, ventas, empleados y clientes dentro del negocio.  
Este proyecto busca digitalizar procesos clave que actualmente se realizan de forma manual, mejorando la eficiencia operativa y la experiencia tanto para clientes como para el personal.

---

## 📌 Objetivo del Proyecto

Desarrollar un software que permita gestionar de manera eficiente:

* Agendado de citas.
* Distribución de cargas de trabajo entre barberos.
* Control de servicios.
* Administración de empleados.
* Registro clientes.

El sistema surge como respuesta a las problemáticas detectadas durante la operación diaria del negocio, como:

* Problemas en la asignación de barberos.
* Ineficiencia en el registro de empleados
* Ausencia de registro digital de citas.
* Falta de control sobre los servicios que realiza el negocio.

---

## 🎯 ¿A quién está dirigido?

El sistema está diseñado para múltiples tipos de usuario:

* **Público general**  
  Acceden a la pagina principal y login de la página
* **Clientes**  
  Agendan citas, consultan servicios y administran su perfil.
* **Barberos / Empleados**  
  Gestionan su agenda, visualizan citas y pueden solicitar cancelaciones.
* **Gerente**  
  Supervisa citas, ventas, empleados y reportes operativos.
* **Administrador**  
  Control total del sistema: CRUD de empleados, servicios, ventas y configuración general.

---

## 🛠️ Tecnologías Implementadas

* **Laravel (PHP Framework)**
* **PHP**
* **MySQL**
* **Composer**
* **Laravel Templates**
* **HTML, CSS, JS**
* (Opcional según avance) Bootstrap / Tailwind / Blade Templates

---

## 📂 Funcionalidades Principales

### 👤 Cliente

* Registro de nuevo cliente.
* Agendar citas.
* Consultar catálogo de cortes.
* Cancelar citas.

### 💈 Barbero

* Inicio de sesión.
* Página de inicio personalizada.
* Solicitar cancelación de cita.
* Ver perfil (emergente).

### 🧑‍💼 Gerente

* Página de inicio del gerente.
* Revisar solicitudes de cancelación.
* Consultar empleados.
* Consultar ventas.
* Ver ventas por barbero (emergente).

### 🛠️ Administrador

* CRUD completo de barberos.
* Administración de servicios (agregar/quitar cortes).
* Gestión de clientes.
* Gestión de usuarios.

---

## 📊 Requerimientos Funcionales y No Funcionales

Este proyecto contempla un conjunto amplio de requerimientos, entre los que destacan:

* Módulo de citas con agenda.
* Registro de clientes y programa de lealtad.
* Interfaz intuitiva y responsiva.
* Seguridad basada en roles y contraseñas seguras.

*(Los requerimientos completos aparecen en el documento original del proyecto.)*

---

## 👥 Integrantes del Equipo

* Alba Castañeda Antonio Saul
* Cervantes Vázquez Jonatan
* Cruz Villalobos Julio Moisés
* García Mejía Salma
* Hernández García Audrey Denisse
* Jiménez Gámez Vannessa Itzel
* Leyva Badillo Aylin Monserrat
* Martínez Martínez Israel
* Meza Ortiz Higget Alejandro
* Montes Rangel Diana Paola

---

## 🚧 Estado Actual del Proyecto

**En desarrollo.**  
Las funcionalidades principales se encuentran en construcción y pruebas.

---

## ⚙️ Instalación y Ejecución del Proyecto

### 🔧 **Requisitos previos**

Asegúrate de tener instalado:

* PHP 8.x
* Composer
* MySQL o MariaDB
* Apache / XAMPP / Laragon / WAMP
* Extensiones de PHP habilitadas:

  * `pdo`
  * `pdo\_mysql`
  * `openssl`
  * `mbstring`
  * `tokenizer`
  * `json`

---

### 📥 **1. Clonar el repositorio**

```bash
git clone https://github.com/dPaolaMon/ProyectoBarberia.git
cd astro-cuts

