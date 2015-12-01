#include <stdio.h>
#include<conio.h>
#include <stdlib.h>

struct studen {
   char name[8],surname[10];
   int phone;
   }std;

void main(){
    FILE *fpt;
    fpt = fopen("D:/mydata_old.txt","w");
    if (fpt == NULL) {
        printf("Error ...Open file!\n\n");
        getch();
        exit(0);
    }
   printf("Enter My Name :  ");
   scanf("%s",std.name);
   printf("Enter My Surname :  ");
   scanf("%s",std.surname);
   printf("Enter Code Call Phone : ");
   scanf("%d",&std.phone);
   fclose(fpt);
   printf("==================================\n");
  getch();
}
