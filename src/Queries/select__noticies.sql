SELECT *
FROM noticies
WHERE IFNULL(data_inici, NOW()) <= NOW()
  AND IFNULL(data_final, NOW()) >= NOW()
ORDER BY ordre;
