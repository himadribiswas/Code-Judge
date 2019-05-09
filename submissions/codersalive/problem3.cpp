#include <stdio.h>
int isPrime(int n);
int isPalin(int n);
int main(void) {
        long long int n,c=0,i,j,temp;
        scanf("%lld",&n);
        if(isPalin(n)==1 && isPrime(n)==1)
        printf("Palprime");
        else
        printf("Not Palprime");
        
}

int isPrime(int n)
{
    int i,c;
    for(i=2;i<=n/2;i++)
    {
        if((n%i)==0)
        c++;
        
    }
    if(c==0)
    return 1;
    else 
    return 0;
    
}

int isPalin(int n)
{
    int k=n,r=0;
    while(k!=0)   {
    r=(r*10)+(k%10);
    k=k/10;
    }
    if(n==r)
    return 1;
    else
    return 0;
}

