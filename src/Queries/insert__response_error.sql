INSERT INTO errors (code, reason, description, url, locale, remote_addr, http_client_ip, http_x_forwarded_for)
VALUES (:c, :r, :d, :u, :l, :a, :h_cip, :h_fwd);
