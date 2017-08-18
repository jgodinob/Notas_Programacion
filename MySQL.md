```sql
CREATE DATABASE `marketpro`DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `marketpro`;

CREATE TABLE IF NOT EXISTS òfertas`(
  `sku` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `introDescripcion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `precioOferta` decimal(10,2) DEFAULT NULL,
  `moneda` varchar(32) COLLATE utf8_spanish2_ci DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `ofertas` (`sku`, `nombre`, ìnfroDescripcion`, `descripcion`, `img`, `precio`, `precioOferta`, `moneda`) 
VALUES (001, 'SPA para 2' 'Vive un momento inolvidable en la Sierra Norte', 'No te puedes perder','','','','','');
```
