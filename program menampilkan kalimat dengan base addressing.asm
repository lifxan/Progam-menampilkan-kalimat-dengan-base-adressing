.MODEL SMALL
.CODE
ORG 100h
TData : JMP Proses
Kalimat DB 'NYAMUK GORENG'; 13 karakter
Proses:
XOR BX,BX ; BX=0 Untuk penunjuk Offset
MOV CX, 13 ; Counter LOOP
Ulang:
MOV DL, Kalimat[BX]; Ambil karakter yang ke BX
MOV AH,02 ; Servis untuk cetak karakter
INT 21h; Cetak Karakter
INC BX; BX:=BX+1
LOOP Ulang ; Lompat ke Ulang sampai CX=0
INT 20h; Selesai, kembali ke DOS !!
END TData