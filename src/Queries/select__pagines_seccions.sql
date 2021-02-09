SELECT titol_pagina_seccio, link_pagina_seccio, hidden
FROM pagines_seccions
         INNER JOIN pagines USING (id_pagina)
WHERE pagines.link_pagina = :l;
