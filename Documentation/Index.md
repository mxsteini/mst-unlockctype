# mst/mst-unlockctype

This extension unlocks the ctype of content elements in translations

## Why?

Since v13, the ctype of content elements is locked in translations. This extension unlocks it.

Compatible with TYPO3 v13.4 and v14 (tested with 14.3).

The reason for this is this issue:

https://forge.typo3.org/issues/60357

The "fix" is this:

https://review.typo3.org/c/Packages/TYPO3.CMS/+/85978

The original issue is about the colPos. To freeze the colPos in translations is not a good solution, because it locks the colPos in the master language.

But they also locked the ctype to the master language. This is a problem, because it remove the substantial feature to have different content elements in different languages.

This extension removes this lock and allows you to have different content elements in different languages.

So, if you need this feature, install this extension, give a like and **DO NOT RUN THE UPGRADE WIZARD**!

'Migrate "colPos" and "CType" of "tt_content" translations to match their parent.'


## Installation

Install the extension via Composer:

```
composer req mst/mst-unlockctype
```

The TCA override (`Configuration/TCA/Overrides/tt_content.php`) is loaded after EXT:frontend, which
defines the `tt_content` TCA since v13. The extension therefore depends on `typo3/cms-frontend`.
