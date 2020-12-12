from validate_email import validate_email
is_valid = validate_email(email_address='yogeshraghav2020@hotmail.com', check_regex=True, check_mx=True, from_address='yogeshraghav2020@hotmail.com', helo_host='my.host.name', smtp_timeout=10, dns_timeout=10, use_blacklist=True, debug=True)
print(is_valid)