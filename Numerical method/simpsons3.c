// simpson's 3/8 rule 

#include<stdio.h>
#include<conio.h>
#include<math.h>
float f(float x){
    return cos(x)/(1+x*x);
}

void main(){
float a, b, h, x, ans, sum=0;
int i,n;
printf("Enter the initial and final value x: \n");
scanf("%f%f", &a,&b);
printf("\n Number of segments :");
scanf("%d", &n);
h=(b-a)/n;
for(i=1 ; i<n ; i++){
   x = a + i*h;
   if(i%3 == 0){
    sum = sum + 2*f(x);
   }
   else{
    sum = sum + 3*f(x);
   }
   }
ans = (3*h/8)*(f(a) + f(b) + sum );
printf("\n integral value of f(x) = %f",ans );

}