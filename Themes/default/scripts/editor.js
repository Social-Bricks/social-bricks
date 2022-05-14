// *** sb_editor class.
/*
 Kept for compatibility with SMF 2.0 editor
 */
function sb_editor(oOptions)
{
	this.opt = oOptions;

	var editor = $('#' + oOptions.sUniqueId);
	this.sUniqueId = this.opt.sUniqueId;
	this.bRichTextEnabled = true;
}

// Return the current text.
sb_editor.prototype.getText = function(bPrepareEntities, bModeOverride)
{
	var e = $('#' + this.sUniqueId).get(0);
	return sceditor.instance(e).getText();
}

// Set the HTML content to be that of the text box - if we are in wysiwyg mode.
sb_editor.prototype.doSubmit = function()
{}

// Populate the box with text.
sb_editor.prototype.insertText = function(sText, bClear, bForceEntityReverse, iMoveCursorBack)
{
	var e = $('#' + this.sUniqueId).get(0);
	sceditor.instance(e).InsertText(sText.replace(/<br \/>/gi, ''), bClear);
}

// Start up the spellchecker!
sb_editor.prototype.spellCheckStart = function()
{
	if (!spellCheck)
		return false;

	var e = $('#' + this.sUniqueId).get(0);

	sceditor.instance(e).storeLastState();
	// If we're in HTML mode we need to get the non-HTML text.
	sceditor.instance(e).setTextMode();

	spellCheck(false, this.opt.sUniqueId);

	return true;
}
