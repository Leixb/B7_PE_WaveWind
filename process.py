#!/usr/bin/env python3

import argparse
import pandas as pd

parser = argparse.ArgumentParser()
parser.add_argument('files', type=str, nargs='+')
parser.add_argument('--output', '-o', type=str, default='data.csv')
parser.add_argument('--pickle', '-p', type=str, default='data.pkl')

args = parser.parse_args()

l = [
        ('Wind Speed (knots)', 2),
        ('Wind Speed (knots)', 5),
        ('Wind Speed (knots)', 8),
        ('Wind Speed (knots)', 11),
        ('Wind Speed (knots)', 14),
        ('Wind Speed (knots)', 17),
        ('Wind Speed (knots)', 20),
        ('Wind Speed (knots)', 23),
        ('Wave (m)', 2),
        ('Wave (m)', 5),
        ('Wave (m)', 8),
        ('Wave (m)', 11),
        ('Wave (m)', 14),
        ('Wave (m)', 17),
        ('Wave (m)', 20),
        ('Wave (m)', 23),
        ]

frames = []

for filename in args.files:
    print(filename)
    with open(filename, 'r') as f:
        df = pd.read_html(f,
                skiprows=2, index_col=0,
                attrs={'class' : 'forecast daily-archive'},
                na_values=['-'],
                flavor=['html5lib'])[0]

    df.index = pd.to_datetime(df.index)

    frames.append(df)

result = pd.concat(frames)

result.columns = pd.MultiIndex.from_tuples(l, names=['Variable', 'Hour'])

print(result)
print(result.describe())

result.to_csv(args.output)
result.to_pickle(args.pickle)
