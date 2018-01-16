## AWS simple notification service example

The AWS SDK for PHP enables PHP developers to use Amazon Web Services from their PHP code. Here is the example of showing how to use amazon simple notification service using **AWS SDK for PHP version > 3**.

### Minimum requirements
  * PHP >= 5.5.0

**Step 1:** Install Composer.
```
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"
```
**Step 2:** Run the Composer command to install the latest stable version of the SDK:
> php composer.phar require aws/aws-sdk-php

**Step 3:** Run sample code in cmd:
> php send.php
