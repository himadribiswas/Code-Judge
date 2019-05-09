import java.util.*;
class problem4
{
    public static int magic(int n)
    {
        while(nod(n)>1)
        {
            n=sod(n);
        }
        if(n==1)
        return 1;
        else 
        return 0;
    }
    public static int nod(int n)
    {
        int c=0;
        while(n>0)
        {
            n/=10;
            c++;
        }
        return c;
    }
    public static int sod(int n)
    {
        int s=0;
        while(n>0)
        {
            s+=(n%10);
            n/=10;
        }
        return s;
    }
    public static int iscom(int n)
    {
        int i=0,c=0;
        for(i=2;i<n;i++)
        {
            if(n%i==0)
            c++;
        }
        if(c!=0)
        return 1;
        else 
        return 0;
    }    
    public static void main(String[] args)
    {
        Scanner sc=new Scanner(System.in);
        int m=sc.nextInt(),n=sc.nextInt(),i;
        if(m<n)
        {
        for(i=m;i<=n;i++)
        {
            if(iscom(i)==1&&magic(i)==1)
            System.out.print(i+"  ");
        }
    }
    else
     System.out.print("invalid Input");
    }
}
            