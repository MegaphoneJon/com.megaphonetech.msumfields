# com.megaphonetech.msumfields

![contributor.png screenshot](/images/contributor.png)

This extension makes additional fields available for use with the Summary Fields extension. Currently this includes
•Financial Type of Last Contribution
•Financial Type of Largest Contribution

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

After installation, navigate to **Administer menu » Customize Data and Screens » Summary Fields** where you will find a new checkbox for the newly-created summary field (for instance **Financial Type of Last Contribution** as shown in the image below). Make sure the checkbox is checked.

![msumfields.png screenshot](/images/msumfields.png)

When you navigate to a contact's summary page and click on the **Summary Fields** tab, the new field will be there (below is a picture of *Financial Type of Last Contribution*).

![contributor.png screenshot](/images/contributor.png)

## Known Issues

None
