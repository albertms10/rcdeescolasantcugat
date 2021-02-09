SELECT text_titular,
       data_titular,
       GROUP_CONCAT(
               DISTINCT CONCAT(url_titular, ',', id_idioma)
               SEPARATOR ';'
           ) AS urls_titular
FROM titulars_premsa AS tp
         INNER JOIN url_titulars_premsa USING (id_titular)
GROUP BY tp.id_titular, data_titular
ORDER BY data_titular DESC;
