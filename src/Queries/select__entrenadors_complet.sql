SELECT id_costecnic,
       nom_complet,
       rol_costecnic,
       COUNT(*) AS count_temporades,
       IF(hidden, NULL,
          (SELECT MAX(any_inici) FROM temporades) -
          (SELECT MAX(any_inici)
           FROM temporades_costecnic
                    INNER JOIN temporades USING (id_temporada)
           WHERE id_costecnic = c.id_costecnic)
           )    AS temporades_a_renovar,
       hidden
FROM costecnic AS c
         INNER JOIN temporades_costecnic USING (id_costecnic)
         INNER JOIN rols_costecnic rc USING (id_rol_costecnic)
GROUP BY c.id_costecnic, rc.id_rol_costecnic, cognoms, nom
ORDER BY rc.id_rol_costecnic DESC, count_temporades DESC, cognoms, nom;
