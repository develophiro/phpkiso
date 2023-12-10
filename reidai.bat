echo off
REM 年月日の名前でフォルダを作成するバッチファイル

REM 作成したい場所を指定
cd "C:\Documents and Settings\"

for /F "tokens=1-1 delims=/ " %%a in ('date /t') do SET YT=%%a
for /F "tokens=2-2 delims=/ " %%a in ('date /t') do SET MT=%%a
for /F "tokens=3-3 delims=/ " %%a in ('date /t') do SET DT=%%a

rem set /a DT= %DT%-1 rem 前日の日付にしたいならコレ
rem echo %DT%

REM 当日のフォルダ作成
md %YT%%MT%%DT%

pause
