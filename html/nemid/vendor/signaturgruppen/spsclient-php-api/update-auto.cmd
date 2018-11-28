cd lib
jar xf stubgen.zip
cd ..

for /f "delims=" %%i in ('lib\SPS.StubGenerator.exe version') do set VERSION=%%i

echo %VERSION%

echo Updating to version %VERSION%

cd src
rd /S /Q Signaturgruppen
cd ..
lib\SPS.StubGenerator.exe PHP src

git add src
git commit -m"Updated to %VERSION%"
git tag -a %VERSION% -m "Tagged"
git push
git push --tags