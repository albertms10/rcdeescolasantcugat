SELECT nom_complet,
       id_rol_costecnic,
       rol_costecnic,
       COUNT(*) AS count_temporades,
       hidden
FROM costecnic AS c
         INNER JOIN temporades_costecnic USING (id_costecnic)
         INNER JOIN rols_costecnic rc USING (id_rol_costecnic)
GROUP BY c.id_costecnic, rc.id_rol_costecnic, cognoms, nom, hidden
HAVING NOT (MAX(id_temporada) <> (SELECT MAX(id_temporada) FROM temporades) OR hidden)
ORDER BY rc.id_rol_costecnic DESC, count_temporades DESC, cognoms, nom;
