' PDF Toolkit — Launches the local server in a hidden window.
' Double-click this file instead of start-server.bat to avoid seeing a command prompt.
Set WshShell = CreateObject("WScript.Shell")
WshShell.Run Chr(34) & CreateObject("Scripting.FileSystemObject").GetParentFolderName(WScript.ScriptFullName) & "\start-server.bat" & Chr(34), 0, False
