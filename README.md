# com.megaphonetech.msumfields

![contributor.png screenshot](/images/contributor.png)

This extension makes additional fields available for use with the Summary Fields extension. Currently this is limited to "Financial Type of Last Contribution."

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.6+
* CiviCRM 5.12+

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.megaphonetech.msumfields@https://github.com/MegaphoneJon/com.megaphonetech.msumfields/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/MegaphoneJon/com.megaphonetech.msumfields.git
cv en msumfields
```

## Usage

Upon installation, go to **Administer menu » Customize Data and Screens » Summary Fields** where you will find a new checkbox for **Financial Type of Last Contribution**. Make sure the checkbox is enabled.

![msumfields.png screenshot](/images/msumfields.png)

When you view a contact and click on the **Summary Fields** tab, you will find a new field, *Financial Type of Last Contribution*

![contributor.png screenshot](/images/contributor.png)

## Known Issues

None
