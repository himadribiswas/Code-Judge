#include <stdio.h>

int main(void) {
        long long int n,f=1,k,s=0,i;
        scanf("%lld",&n);
        k=n;
        while(n!=0)
        {
            for(i=1;i<=n%10;i++)
            f=f*i;
            s=s+f;
            f=1;
            n=n/10;
        }
        if(s==k)
        printf("Yes\n");
        else
        printf("No\n");
    
    	return 0;
}

