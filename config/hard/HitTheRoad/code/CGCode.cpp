#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    int m;
    int ntw;
    cin >> n >> m >> ntw; cin.ignore();
    int s;
    int t;
    cin >> s >> t; cin.ignore();
    for (int i = 0; i < ntw; i++) {
        int v;
        int b;
        int e;
        cin >> v >> b >> e; cin.ignore();
    }
    for (int i = 0; i < m; i++) {
        int u;
        int v;
        int d;
        cin >> u >> v >> d; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "true" << endl;
}